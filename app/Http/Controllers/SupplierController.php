<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function show(){
        $buysepatu = DB::table('purchase_suppliers')->sum('sepatu');
        $buysandal = DB::table('purchase_suppliers')->sum('sandal');
        $buylays = DB::table('purchase_suppliers')->sum('lays');
        $buycocacola = DB::table('purchase_suppliers')->sum('cocacola');
        $buydeterjen = DB::table('purchase_suppliers')->sum('detergen');
        $buytissue = DB::table('purchase_suppliers')->sum('tissue');
        $buyoil = DB::table('purchase_suppliers')->sum('oil');
        $buygula = DB::table('purchase_suppliers')->sum('gula');
        $buypasta_gigi = DB::table('purchase_suppliers')->sum('pasta_gigi');
        $buysabun_piring = DB::table('purchase_suppliers')->sum('sabun_piring');
        return view('supplier.supplier', 
        compact('buysepatu', 'buysandal', 'buylays', 'buycocacola', 'buydeterjen', 'buytissue', 'buyoil', 'buygula', 'buypasta_gigi', 'buysabun_piring'));
    }
}
