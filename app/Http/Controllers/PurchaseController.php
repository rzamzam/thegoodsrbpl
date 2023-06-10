<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Products;
use PDF;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show(){
        return view('buyer.katalog');
    }
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
            'sepatu' => $request->jumlah_sepatu,
            'sandal' => $request->jumlah_sandal,
            'lays' => $request->jumlah_lays,
            'cocacola' => $request->jumlah_cocacola,
            'tissue' => $request->jumlah_paseo,
            'oil' => $request->jumlah_oil,
            'gula' => $request->jumlah_gulaku,
            'pasta_gigi' => $request->jumlah_odol,
            'sabun_piring' => $request->jumlah_mama,
            'detergen' => $request->jumlah_tide,
            'user_id' => auth()->user()->user_id,
            'totalprice' => $request->totalPriceInt,
        ]);
        return redirect()->back()->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function history()
    {
        $purchases = Purchase::where('user_id', '=', 1)->get();
        return view('buyer.history', compact('purchases'));
    }
    public function viewInvoice($id)
    {
        $purchases = Purchase::where('purchase_id', '=', $id)->first();
        return view('invoice_pdf', compact('purchases'));
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
