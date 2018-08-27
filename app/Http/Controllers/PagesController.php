<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function objetive()
    {
        return view('objetive');
    }

    public function experience()
    {
        return view('experience');
    }

    public function education()
    {
        return view('education');
    }

    public function skills()
    {
        return view('skills');
    }
}
