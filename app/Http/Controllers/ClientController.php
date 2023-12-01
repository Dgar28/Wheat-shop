<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$clients = Client::all();
        $clients = Client::where('user_id', Auth::id())->get();
        //return view('client.index', compact('clients'));
        return view('client.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = $request->validate([
            'client_code' => 'required|max:8',
           'client_name' => 'required|max:255',
           'age' => 'required',
            'phone' => 'required'
        ]);

        $request->merge(['user_id' => Auth::id()]);
        Client::create($request->all());

        /*try{
        $client = new Client();
        $client->client_code = $request->client_code;
        $client->client_name = $request->client_name;
        $client->age = $request->age;
        $client->phone = $request->phone;
        $client->save();

        //return redirect()->route('product.index');
        return redirect('client')
            ->with('success','Client entered successfully. ');
        }
        catch (\Exception $e) {
            return redirect()->route('client.index'); 
        }
        */
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        $clients = Client::query()->with('user');
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        try{
            $client->client_code = $request->client_code;
            $client->client_name = $request->client_name;
            $client->age = $request->age;
            $client->phone = $request->phone;
            $client->save();
            return redirect()->route('client.index')
                ->with('success','Client updated successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('client.index'); 
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        try{
            $client->delete();
            return redirect()->route('client.index')
                ->with('success','Client deleted successfully');
            }
            catch (\Exception $e) {
                return redirect()->route('client.index'); 
            }
    }
}