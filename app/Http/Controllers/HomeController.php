<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.dashboard');
    }
    public function index()
    {
        return view('pages.dashboard');
    }


}
