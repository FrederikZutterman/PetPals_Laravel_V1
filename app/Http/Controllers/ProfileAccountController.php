<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\People;
use App\Role;

class ProfileAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_info = Auth::User();
        $user_data = People::where('id', $user_info->people_id)->get();
        $user_role = User::find($user_info->id)->roles;
        
        $user = [
            'user_info' => $user_info,
            'user_data' => $user_data,
            'user_role' => $user_role,
            'role_name' => $user_role[0]->name
        ];

        return view('profile.account.index')->with('user', (object)$user);   
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    public function edit()
    {
        $user_info = Auth::User();
        $user_data = People::where('id', $user_info->people_id)->get();
        $user_role = User::find($user_info->id)->roles;
        
        $user = [
            'user_info' => $user_info,
            'user_data' => $user_data,
            'user_role' => $user_role,
            'role_name' => $user_role[0]->name
        ];

        return view('profile.account.edit')->with('user', (object)$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request)
    {
        //var_dump($request);
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required'
        ]);

        $person = People::find($request->identifier);
        $person->first_name = $request->input('first_name');
        $person->last_name = $request->input('last_name');
        $person->save();

        return redirect('/profile/account')->with('success', 'Profile Updated');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        //
    }
}
