<?php

namespace App\Http\Controllers;

use App\Models\GuestBook;
use Illuminate\Http\Request;

class GuestBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'message' => 'required',
            'confirmation' => 'required',
            'invitation_id' => 'required'
        ];

        $validatedData = $request->validate($rules);

        GuestBook::create($validatedData);

        $previousUrl = app('url')->previous();

        // return redirect()->to($previousUrl . '?' . http_build_query(['varName' => 'varValue']));

        return redirect($previousUrl . '#guest-book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function show(GuestBook $guestBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestBook $guestBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuestBook $guestBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuestBook  $guestBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestBook $guestBook)
    {
        //
    }
}
