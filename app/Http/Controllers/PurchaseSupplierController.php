<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseSupplier;

class PurchaseSupplierController extends Controller
{
    public function store(Request $request)
    {
        PurchaseSupplier::create([
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
}
