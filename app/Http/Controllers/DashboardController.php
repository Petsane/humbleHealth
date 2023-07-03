<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::get();
        return view('product', compact('products'));
    }
}
