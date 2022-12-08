<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');
        return view('products.create-step-one', compact('product'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validateData = $request->validate([
            'name'=> 'required',
            'amount'=> 'required',
            'description'=> 'required'
        ]);

        if(empty($request->session()->get('product'))){
            $product = new Product();
            $product->fill($validateData);
            $request->session()->put('product', $product);
        } else{
            $product = $request->session()->get('product');
            $product->fill($validateData);
            $request->session()->put('product', $product);
        }

        return redirect()->route('products.create.step.two', compact('product'));
    }

    public function createStepTwo(Request $request)
    {
        $product = $request->session()->get('product');
        return view('products.create-step-two', compact('product'));
    }
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);
  
        $product = $request->session()->get('product');
        $product->fill($validatedData);
        $request->session()->put('product', $product);
  
        return redirect()->route('products.create.step.three');
    }
    
    public function createStepThree(Request $request)
    {
        $product = $request->session()->get('product');
  
        return view('products.create-step-three',compact('product'));
    }

    public function postCreateStepThree(Request $request)
    {
        $product = $request->session()->get('product');
        $product->save();
  
        $request->session()->forget('product');
  
        return redirect()->route('products.index');
    }

}
