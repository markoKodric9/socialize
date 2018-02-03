<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function newsfeed()
    {
        $user = User::find(auth()->id());
        
        return view('news-feed')->with('user', $user);
    }

    public function profile($username){
        $user = User::where('username', $username)->first();

        return view('profiles.profile')->with('user', $user);
    }

    public function messenger() {
        $user = User::find(auth()->id());
        
        return view('messenger')->with('user', $user);
    }

    public function weather() {
        $user = User::find(auth()->id());
        
        return view('weather')->with('user', $user);
    }
}
