<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard');
    }
    public function about(){
        return view('about');
    }
    public function buy(){
        return view('buy');
    }
    public function online(){
        return view('online');
    }
    public function catalogue(){
        return view('catalogue');
    }
    public function contact(){
        return view('contact');
    }
}
