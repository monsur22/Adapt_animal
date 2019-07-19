<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    public function index(){
        // return view('Home.homecontent.homecontent');
        return view('user.home.home_content');
    }

}
