<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductRecord;
use Illuminate\Http\Request;

class ProductRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_records = ProductRecord::all();
        return view('prodrecord.prd_index', compact('product_records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('prodrecord.prd-capture', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pdr = new ProductRecord();
        $pdr->availability = $request->availability;
        $pdr->storage_date = $request->storage_date;
        $pdr->status = $request->status;
        $pdr->location = $request->location;

        $product = Product::find($request->product_id);
        $product->product_records()->save($pdr);

        return redirect()->route('product.index')->with('success','New sale details added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(ProductRecord $productRecord)
    {
        return view('prodrecord.prd_show', compact('productRecord'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductRecord $productRecord)
    {
        return view('prodrecord.prd_edit', compact('productRecord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductRecord $productRecord)
    {
        try{
            $productRecord->availability = $request->availability;
            $productRecord->storage_date = $request->storage_date;
            $productRecord->status = $request->status;
            $productRecord->location = $request->location;
            $productRecord->save();
            return redirect()->route('productRecord.index')
                ->with('success','Record updated successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('productRecord.index'); 
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductRecord $productRecord)
    {
        try{
            $productRecord->delete();
            return redirect()->route('productRecord.index')
                ->with('success','Deleted successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('productRecord.index'); 
            }
    }
}
