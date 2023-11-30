<?php

namespace App\Http\Controllers;

use App\Models\TypeProduct;
use App\Models\Provider;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_products = TypeProduct::all();
        return view('typeprod.tpd_index', compact('type_products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers = Provider::all();
        return view('typeprod.tpd-capture', compact('providers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tdp = new TypeProduct();
        $tdp->origin = $request->origin;
        $tdp->amount = $request->amount;
        $tdp->type = $request->type;

        $provider = Provider::find($request->provider_id);
        $provider->type_products()->save($tdp);
        return redirect()->route('provider.index')->with('success','Type details added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeProduct $typeProduct)
    {
        return view('typeprod.tpd_show',compact('typeProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeProduct $typeProduct)
    {
        return view('typeprod.tpd_edit', compact('typeProduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeProduct $typeProduct)
    {
        try{
            $typeProduct->origin = $request->origin;
            $typeProduct->amount = $request->amount;
            $typeProduct->type= $request->type;
            $typeProduct->provider_id =$request->provider_id;
            $typeProduct->save();
            return redirect()->route('typeProduct.index')
                ->with('success','Type updated successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('typeProduct.index'); 
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeProduct $typeProduct)
    {
        try{
            $typeProduct->delete();
            return redirect()->route('typeProduct.index')
                ->with('success','Deleted successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('typeProduct.index'); 
            }
    }
}
