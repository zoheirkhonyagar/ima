<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Portfolio;
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
        $portfolios = Portfolio::take(4)->latest()->get();
        $posts = Post::where('pcat_id' , 1)->take(4)->latest()->get();
        return view('main.main-page.index' , compact(['portfolios','posts']));
    }

    public function aboutUs()
    {
        return view('main.about-us.index');
    }

    public function portfolio()
    {

    }

    public function blog()
    {
        // return view('main.blog.index');
    }

    public function contactUs()
    {
        return view('main.contact.index');
    }
}
