<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Purchase;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $products = Products::all();
        $sum = Products::sum('stock');
        $sepatu = DB::table('purchases_store')->sum('sepatu');
        $sandal = Purchase::sum('sandal');
        $lays = Purchase::sum('lays');
        $cocacola = Purchase::sum('cocacola');
        $deterjen = Purchase::sum('detergen');
        $tissue = Purchase::sum('tissue');
        $oil = Purchase::sum('oil');
        $gula = Purchase::sum('gula');
        $pasta_gigi = Purchase::sum('pasta_gigi');
        $sabun_piring = Purchase::sum('sabun_piring');
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
        $january = Purchase::whereMonth('created_at','01')->get()->count(); 
    	$february = Purchase::whereMonth('created_at','02')->get()->count(); 
    	$march = Purchase::whereMonth('created_at','03')->get()->count(); 
    	$april = Purchase::whereMonth('created_at','04')->get()->count(); 
    	$may = Purchase::whereMonth('created_at','05')->get()->count(); 
    	$june = Purchase::whereMonth('created_at','06')->get()->count(); 
    	$july = Purchase::whereMonth('created_at','07')->get()->count(); 
    	$august = Purchase::whereMonth('created_at','08')->get()->count(); 
    	$september = Purchase::whereMonth('created_at','09')->get()->count(); 
    	$october = Purchase::whereMonth('created_at','10')->get()->count(); 
    	$november = Purchase::whereMonth('created_at','11')->get()->count(); 
    	$december = Purchase::whereMonth('created_at','12')->get()->count(); 
        return view('owner.owner', 
        compact('products', 'sum', 'sepatu', 'sandal', 'lays', 'cocacola', 
        'deterjen', 'oil', 'gula', 'pasta_gigi', 'sabun_piring', 'tissue',
        'buysepatu', 'buysandal', 'buylays', 'buycocacola', 'buydeterjen', 'buytissue',
            'buyoil', 'buygula', 'buypasta_gigi', 'buysabun_piring', 'january','february','march', 'may', 'april','june','july', 'august', 'september',
        'october', 'november', 'december'));
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
