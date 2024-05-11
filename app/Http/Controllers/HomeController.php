<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    return view('include.header')
        ->with([
            'sidebar' => view('include.sidebar'),
            'topnav' => view('include.topnav'),
            'footer' => view('include.footer'),
        ]);
}
}