<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $products = Product::get();
        // echo '<pre>'; print_r($products);die;
        return view('admin.dashboard', compact('products'));
    }

    public function newProduct(){
        return view('admin.newProduct');
    }

    public function uploadProduct(Request $request){
        $product = new Product;

        $image = $request->image;
        $imageName = $image->getClientOriginalName();
        $request->image->move('product-images', $imageName);

        $product->name = $request->name;
        $product->by = $request->by;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $imageName;
        $product->save();
        return redirect()->route('new-product')->with('status', 'Product added Successfully');

    }

    public function updateProduct(Request $request){
        $id = $request->id;
        $image = Product::select('image')->where('id', '=', $id);

        if($request->name != null){
            Product::where('id', '=', $id)->update(['name' => $request->name]);
        }
        if($request->quantity != null){
            Product::where('id', '=', $id)->update(['quantity' => $request->quantity]);
        }
        if($request->by != null){
            Product::where('id', '=', $id)->update(['by' => $request->by]);
        }
        if($request->description != null){
            Product::where('id', '=', $id)->update(['description' => $request->description]);
        }
        if($request->price != null){
            Product::where('id', '=', $id)->update(['price' => $request->price]);
        }
        if($request->image != null){
            Product::where('id', '=', $id)->update(['image' => $request->image]);
            if(file_exists(public_path('product-images/'.$image))){
                unlink(public_path('product-images/'.$image));
            }
            $imageName = $image->getClientOriginalName();
            $request->image->move('product-images', $imageName);
        }
        
        return redirect()->route('admin')->with('status', 'Product edited Successfully');
    }

    public function destroy(Request $request){
        $id = $request->id;
        $image = $request->image;
        Product::where('id', '=', $id)->delete();

        if(file_exists(public_path('product-images/'.$image))){
            unlink(public_path('product-images/'.$image));
        }
        return redirect()->route('admin')->with('status', 'Product deleted successfully');
    }
}
