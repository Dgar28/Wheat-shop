<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotifySaleCreated;
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

            Mail::to($request->user())->send(new NotifySaleCreated($sal));
            return redirect()->route('client.index')->with('success','New sale added!');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('sale.sale_show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        return view('sale.sale_edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        try{
            $sale->sale_folio = $request->sale_folio;
            $sale->sale_date = $request->sale_date;
            $sale->client_id = $request->client_id;
            $sale->save();
            return redirect()->route('sale.index')
                ->with('success','Sale updated successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('sale.index'); 
            }
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
