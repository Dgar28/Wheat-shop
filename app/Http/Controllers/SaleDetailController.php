<?php

namespace App\Http\Controllers;

use App\Models\Sale_detail;

use App\Models\Sale;
//use App\Models\Product;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale_details = Sale_detail::all();
        return view('saledetail.sd_index', compact('sale_details'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sales = Sale::all();
       //$products = Product::all();
       return view('saledetail.sd-capture', compact('sales'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sdl = new Sale_detail();
        $sdl->quantity = $request->quantity;
        $sdl->buy_price = $request->buy_price;

        $sale = Sale::find($request->sale_id);
       // $product = Product::find($request->product_id);
        $sale->sale_details()->save($sdl);
       // $product->sale_details()->save($sdl);

        return redirect()->route('product.index')->with('success','New sale details added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale_detail $sale_detail)
    {
        return view('saledetail.sd_show', compact('sale_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale_detail $sale_detail)
    {
        $this->authorize('saledetail.sd_edit', $sale_detail);
        return view('saledetail.sd_edit', compact('sale_detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale_detail $sale_detail)
    {
        $this->authorize('saledetail.sd_edit', $sale_detail);
        try{
            $sale_detail->quantity = $request->quantity;
            $sale_detail->buy_price = $request->buy_price;
            $sale_detail->sale_id = $request->sale_id;
            $sale_detail->save();
            return redirect()->route('sale_detail.index')
                ->with('success','Sale updated successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('sale_detail.index'); 
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale_detail $sale_detail)
    {
        try{
            $sale_detail->delete();
            return redirect()->route('sale_detail.index')
                ->with('success','Deleted successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('sale_detail.index'); 
            }
    }
}
