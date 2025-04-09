<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('page.home');
    }

    public function pelaporan()
    {
        return view('page.pelaporan');
    }
    public function about()
    {
        return view('page.about');
    }
}
