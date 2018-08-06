<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('home');
        }

        return view('welcome');
    }

    public function aboutForum()
    {
        return view('about_forum');
    }

    public function callForPaper()
    {
        return view('call_for_paper');
    }

    public function importantDate()
    {
        return view('important_date');
    }

    public function registrationFee()
    {
        return view('registration_fee');
    }
}

