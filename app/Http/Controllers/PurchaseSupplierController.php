<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseSupplier;

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
            'user_id' => 1,
            'totalprice' => $request->totalPriceInt,
        ]);
        return redirect()->back()->with('success');
    }
}
