<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function home()
    {
        return view('landing');
    }

        public function contact()
    {
        return view('contact');
    }

}
