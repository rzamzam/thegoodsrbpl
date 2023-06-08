<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use PDF;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function Invoice()
    {
        $pdf = PDF::loadView('invoice_pdf');

        return $pdf->download('techsolutionstuff.pdf');
    }
    public function index()
    {
        //
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
        Purchase::create([
            'sepatu' => $request->sepatu,
            'plastic_cup' => $request->jumlah_plasticGlass,
            'sandal' => $request->sandal,
            'snack' => $request->snack,
            'soda_kaleng' => $request->soda_kaleng,
            'tissue' => $request->tissue,
            'minyak_goreng' => $request->minyak_goreng,
            'gula' => $request->gula,
            'pasta_gigi' => $request->pasta_gigi,
            'detergen' => $request->detergen,
            'user_id' => Auth::id(),
            // 'bpoints' => $request->bPoints,
        ]);
        return redirect()->back()->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
