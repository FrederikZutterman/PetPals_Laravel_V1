<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shelter;
use Auth;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $current_user_id = Auth::user()->id;

        //  See if there is a shelter connected to the user
        $shelter_info = Shelter::where('user_id', $current_user_id)->get();

        //var_dump($shelter_info);
        
        return view('profile.dashboard')->with('shelter', (object)$shelter_info);
    }

    public function profileRoot()
    {
        return redirect('profile/dashboard');
    }

    public function addshelter()
    {
        
        //return view('profile.add.shelter');
    }

    public function createStep1(Request $request)
    {
        return view('profile.add.shelterStep1');
    }

    public function postCreateStep1(Request $request)
    {
        //var_dump($request);
        var_dump($_POST);
    }

    


}
