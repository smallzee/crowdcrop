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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page_title = "Home";
        return view('index',compact('page_title'));
    }

    public function error_page(){
        $page_title = "Page Not Found";
        return view('errors.404',compact('page_title'));
    }

    public function error_page_expired(){
        $page_title = "Page Expired";
        return view('errors.419',compact('page_title'));
    }
}
