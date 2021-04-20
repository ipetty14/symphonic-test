<?php

namespace App\Http\Controllers;

use App\Models\SymphonicUser;
use Illuminate\Http\Request;

class SymphonicUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = SymphonicUser::all();

        return view('symphonicUsersTable', ['users' => $users]);
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
        $user_id = $request->userId;
        $username = $request->username;
        $email = $request->email;

        $user = SymphonicUser::find($user_id);

        if ($user) {
            $user->username = $username;
            $user->email = $email;

            $user->save();
        }

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SymphonicUser  $symphonicUser
     * @return \Illuminate\Http\Response
     */
    public function show(SymphonicUser $symphonicUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SymphonicUser  $symphonicUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SymphonicUser $symphonicUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SymphonicUser  $symphonicUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SymphonicUser $symphonicUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SymphonicUser  $symphonicUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SymphonicUser $symphonicUser)
    {
        //
    }
}
