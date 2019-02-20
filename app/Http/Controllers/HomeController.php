<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main.main-page.index');
    }

    public function aboutUs()
    {
        return view('main.about-us.index');
    }

    public function portfolio()
    {
        return view('main.portfolio.index');
    }

    public function blog()
    {
        return view('main.blog.index');
    }
}
