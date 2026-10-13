<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "Hello Laravel Users!";
        $greeting = 'Welkom bij de project van Laravel';
        return view('about', compact('title', 'greeting'));
    }

}

