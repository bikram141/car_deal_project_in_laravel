<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('user.about');
    }
    public function team()
    {
        return view('user.team');
    }
    public function terms()
    {
        return view('user.terms');
    }
    public function faq()
    {
        return view('user.faq');
    }
    public function testimonials()
    {
        return view('user.testimonials');
    }
}
