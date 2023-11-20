<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.product-index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.product-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->validate([
            'name' => 'required|max:20',
           'price' => 'required|max:8',
           'product_code' => 'required',
            'type' => 'required'
        ]);

        try{
            $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->product_code = $request->product_code;
        $product->type = $request->type;
        $product->save();

        //return redirect()->route('product.index');
        return redirect('product')
            ->with('success','Product created successfully. ');
        }
        catch (\Exception $e) {
            return redirect()->route('product.index'); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.product-edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
         //     $request->validate([
    //        'name' => 'required|max:255',
   //        'price' => 'required|max:8',
   //        'product_code' => 'required',
   //         'type' => 'required'
   //     ]);
          try{
            $product->name = $request->name;
        $product->price = $request->price;
        $product->product_code = $request->product_code;
        $product->type = $request->type;
        $product->save();

        return redirect()->route('product.index')
            ->with('success','Product updated successfully');
          }
          catch (\Exception $e) {
            return redirect()->route('product.index'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        try{
            $product->delete();
        return redirect()->route('product.index');
        return redirect()->route('product.index')
            ->with('success','Product deleted successfully');
        }
        catch (\Exception $e) {
            return redirect()->route('product.index'); 
        }
    }
    
}
