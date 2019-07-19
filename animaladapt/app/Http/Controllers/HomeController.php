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
        // return view('home');
        return view('Home.homecontent.homecontent');

    }
    public function cats_index(){
        return view('Home.pages.cats');

    }
    public function dogs_index(){
        return view('Home.pages.dogs');

    }
    public function volunteer_index(){
        return view('Home.pages.volunteer');

    }
    public function about_index(){
        return view('Home.pages.about');

    }
    public function contact_index(){
        return view('Home.pages.contact');

    }
}
