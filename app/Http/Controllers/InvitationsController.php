<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Models\Invitations;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use DateTime;
use Illuminate\Support\Facades\Storage;

class InvitationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitations = Invitations::where('user_id', auth()->user()->id)->get();
        return view('invitation.index', [
            'invitations' => $invitations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');
        return view('invitation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        $rules = [
            'cover_image' => 'required|image|file|max:2048',
            'groom_image' => 'required|image|file|max:2048',
            'bride_image' => 'required|image|file|max:2048',
            'groom_name' => 'required|max:255',
            'groom_full_name' => 'required|max:255',
            'groom_info' => 'required',
            'bride_name' => 'required|max:255',
            'bride_full_name' => 'required|max:255',
            'bride_info' => 'required',
            'wedding_date' => 'required|date',
            'wedding_time_start' => 'required|date_format:H:i',
            'wedding_time_end' => 'required|date_format:H:i',
            'wedding_venue' => 'required|max:255',
            'wedding_venue_address' => 'required|max:255',
            'reseption_date' => 'required|date',
            'reseption_time_start' => 'required|date_format:H:i',
            'reseption_time_end' => 'required|date_format:H:i',
            'reseption_venue' => 'required|max:255',
            'reseption_venue_address' => 'required|max:255'
        ];

        $validateData = $request->validate($rules);

        $validateData['slug'] = $this->checkSlug([
            'groom_name' => $validateData['groom_name'],
            'bride_name' => $validateData['bride_name']
        ]);
        $validateData['cover_image'] = $request->file('cover_image')->store('invitation-images');
        $validateData['groom_image'] = $request->file('groom_image')->store('invitation-images');
        $validateData['bride_image'] = $request->file('bride_image')->store('invitation-images');
        $validateData['user_id'] = auth()->user()->id;

        Invitations::create($validateData);

        return redirect('invitation/create')->with('message', 'New Invitation has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invitations  $invitations
     * @return \Illuminate\Http\Response
     */
    public function show(Invitations $invitation)
    {
        $userId = auth()->check() ? auth()->user()->id : -1;
        $isAdmin = auth()->check() ? auth()->user()->admin : -1;
        if ($invitation->is_active || $invitation->user_id == $userId || $isAdmin > 0) {
            $invitation['guest_books'] = GuestBook::latest()->where('invitation_id', $invitation->id)->get();
            $invitation['day'] = date('l', strtotime($invitation['wedding_date']));

            $invitation['wedding_date'] = date('d F Y', strtotime($invitation['wedding_date']));
            $invitation['wedding_time_start'] = date('H:i', strtotime($invitation['wedding_time_start']));
            $invitation['wedding_time_end'] = date('H:i', strtotime($invitation['wedding_time_end']));

            $invitation['reseption_date'] = date('d F Y', strtotime($invitation['wedding_date']));
            $invitation['reseption_time_start'] = date('H:i', strtotime($invitation['reseption_time_start']));
            $invitation['reseption_time_end'] = date('H:i', strtotime($invitation['reseption_time_end']));

            // ddd($invitation['wedding_date']);

            return view('design.design' . $invitation->design_id, [
                'invitation' => $invitation
            ]);
        } else {
            echo 'undangan belum aktif, suruh ' . $invitation->user->name . ' bayar dulu woy!';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invitations  $invitations
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitations $invitations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invitations  $invitations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitations $invitations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitations  $invitations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitations $invitation)
    {
        Storage::delete($invitation->cover_image);
        Storage::delete($invitation->groom_image);
        Storage::delete($invitation->bride_image);

        Invitations::destroy($invitation->id);
        GuestBook::deleteByInvitationId($invitation->id);

        return back();
    }

    // public function checkSlug(Request $request)
    // {
    //     $name = $request->groom_name . '-' . $request->bride_name;
    //     $slug = SlugService::createSlug(Invitations::class, 'slug', $name);
    //     return response()->json(['slug' => $slug]);
    // }

    public function isActive(Request $request)
    {
        Invitations::setActive($request->id, $request->is_active);

        return back();
    }

    public function checkSlug($names)
    {
        $name = $names['groom_name'] . '-' . $names['bride_name'];
        $slug = SlugService::createSlug(Invitations::class, 'slug', $name);
        return $slug;
    }
}
