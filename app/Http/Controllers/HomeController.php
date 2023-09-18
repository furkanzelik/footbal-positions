<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       $text = 'Je bent op deze website';
        return view('home' , compact('text'));
    }
}
