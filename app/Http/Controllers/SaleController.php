<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Client;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::all();
        return view('sale.sale_index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('sale.capture-req-form', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $sal = new Sale();
            $sal->sale_folio = $request->sale_folio;
            $sal->sale_date = $request->sale_date;

            $client = Client::find($request->client_id);
            $client->sales()->save($sal);
            return redirect()->route('client.index')->with('success','New sale added!');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('sale.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        try{
            $sale->delete();
            return redirect()->route('sale.index')
                ->with('success','Deleted successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('sale.index'); 
            }
    }
}
