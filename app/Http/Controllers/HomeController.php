<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        return view('website.home');
    }
    
    public function cricket()
    {
        return view('website.cricket');
    }

    public function snooker()
    {
        return view('website.snooker');
    }

    public function football()
    {
        return view('website.football');
    }
}
