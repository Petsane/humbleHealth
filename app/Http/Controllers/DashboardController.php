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
    public function product(){
        return view('product');
    }
}
