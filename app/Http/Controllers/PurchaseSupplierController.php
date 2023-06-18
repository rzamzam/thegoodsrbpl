<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseSupplier;
use Illuminate\Support\Facades\Auth;

class PurchaseSupplierController extends Controller
{
    public function store(Request $request)
    {
        PurchaseSupplier::create([
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
        return redirect('/pembayaran');
    }
    public function viewHistory()
    {
        $purchases = PurchaseSupplier::where('user_id', '=', Auth::user()->user_id)->get();
        return view('buyer.historyOwner' , compact('purchases'));
    }
    public function viewInvoice($id)
    {
        $purchases = PurchaseSupplier::where('purchaseSupplier_id', '=', $id)->first();
        return view('invoice_owner', compact('purchases'));
    }
}
