<?php

namespace App\Http\Controllers;

use App\Models\Prodotto;
use Illuminate\Http\Request;

class ProdottiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodotti = Prodotto::all();

        $data = [
            'prodotti'=>$prodotti
        ];

        return view('prodotti.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodotto $prodotto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodotto $prodotto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodotto $prodotto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodotto $prodotto)
    {
        //
    }
}
