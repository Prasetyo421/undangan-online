<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use App\Models\Invitations;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
        $this->middleware('verified');
    }

    public function index()
    {
        return view('dashboard.index');
    }

    public function invitation()
    {
        $invitations = Invitations::all();
        return view('dashboard.invitation.index', [
            'invitations' => $invitations
        ]);
    }

    public function show(Invitations $invitation)
    {
        $invitation['guest_books'] = GuestBook::latest()->where('invitation_id', $invitation->id)->get();

        return view('design.index', [
            'invitation' => $invitation
        ]);
    }
}
