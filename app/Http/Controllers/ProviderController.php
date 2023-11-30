<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = Provider::all();
        return view('provider.provider-index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provider.provider-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $provider = $request->validate([
            'name_p' => 'required',
           'email' => 'required',
           'phone' => 'required'
        ]);

        try{
            $provider = new Provider();
        $provider->name_p = $request->name_p;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        $provider->save();

        //return redirect()->route('product.index');
        return redirect('provider')
            ->with('success','Product created successfully. ');
        }
        catch (\Exception $e) {
            return redirect()->route('provider.index'); 
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        return view('provider.provider-show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provider $provider)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provider $provider)
    {
        try{
            $provider = new Provider();
        $provider->name_p = $request->name_p;
        $provider->email = $request->email;
        $provider->phone = $request->phone;
        $provider->save();

        return redirect()->route('provider.index')
            ->with('success','Provider updated successfully');
          }
          catch (\Exception $e) {
            return redirect()->route('provider.index'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {
        try{
            $provider->delete();
        return redirect()->route('provider.index');
        return redirect()->route('provider.index')
            ->with('success','Provider deleted successfully');
        }
        catch (\Exception $e) {
            return redirect()->route('provider.index'); 
        }
    }
}
