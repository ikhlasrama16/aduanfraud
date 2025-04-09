<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
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
