<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'product_name'=>'sepatu',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'sandal',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'lays',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'cocacola',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'tissue',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'oil',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'gula',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'pasta_gigi',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'sabun_piring',
            'stock'=>40,
        ]);
        DB::table('products')->insert([
            'product_name'=>'deterjen',
            'stock'=>40,
        ]);
    }
}
