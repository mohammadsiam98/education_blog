<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    //



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard()
    {

        $user = Auth::user();
        if($user->user_type == 'admin')
        {
            return view('pages.dashboard');
        }
        else{
            return view('pages.404NotFound');
        }
    }

    public function User_dashboard()
    {
        $user = Auth::user();

        if($user->user_type == 'user')
        {
            return view('pages.User_dashboard');
        }
        else{
            return view('pages.404NotFound');
        }
      
    }


    public function index()
    {
        return view('pages.dashboard');
    }


}
