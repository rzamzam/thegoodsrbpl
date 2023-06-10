<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('purchases_store')->insert([
            'sepatu'=>8,
            'sandal'=>2,
            'lays'=>6,
            'cocacola'=>1,
            'tissue'=>9,
            'oil'=>4,
            'gula'=>7,
            'pasta_gigi'=>5,
            'sabun_piring'=>10,
            'detergen'=>3,
            'user_id'=>1,
            'created_at'=>'2023-01-15 14:27:59',
]);
        DB::table('purchases_store')->insert([
            'sepatu'=>7,
            'sandal'=>4,
            'lays'=>1,
            'cocacola'=>10,
            'tissue'=>6,
            'oil'=>3,
            'gula'=>9,
            'pasta_gigi'=>2,
            'sabun_piring'=>5,
            'detergen'=>8,
            'user_id'=>1,
            'created_at'=>'2023-02-18 08:45:12',
      ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>2,
            'sandal'=>9,
            'lays'=>7,
            'cocacola'=>4,
            'tissue'=>6,
            'oil'=>8,
            'gula'=>3,
            'pasta_gigi'=>1,
            'sabun_piring'=>5,
            'detergen'=>10,
            'user_id'=>1,
            'created_at'=>'2023-02-25 16:23:05',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>3,
            'sandal'=>9,
            'lays'=>7,
            'cocacola'=>2,
            'tissue'=>5,
            'oil'=>8,
            'gula'=>6,
            'pasta_gigi'=>1,
            'sabun_piring'=>4,
            'detergen'=>10,
            'user_id'=>1,
            'created_at'=>'2023-03-21 09:37:18',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>6,
            'sandal'=>3,
            'lays'=>9,
            'cocacola'=>7,
            'tissue'=>2,
            'oil'=>1,
            'gula'=>8,
            'pasta_gigi'=>4,
            'sabun_piring'=>5,
            'detergen'=>10,
            'user_id'=>1,
            'created_at'=>'2023-12-04 14:56:22',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>5,
            'sandal'=>7,
            'lays'=>3,
            'cocacola'=>10,
            'tissue'=>1,
            'oil'=>9,
            'gula'=>4,
            'pasta_gigi'=>8,
            'sabun_piring'=>6,
            'detergen'=>2,
            'user_id'=>1,
            'created_at'=>'2023-05-18 11:24:37',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>9,
            'sandal'=>2,
            'lays'=>7,
            'cocacola'=>4,
            'tissue'=>8,
            'oil'=>5,
            'gula'=>1,
            'pasta_gigi'=>3,
            'sabun_piring'=>10,
            'detergen'=>6,
            'user_id'=>1,
            'created_at'=>'2023-06-14 18:37:59',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>7,
            'sandal'=>4,
            'lays'=>2,
            'cocacola'=>9,
            'tissue'=>6,
            'oil'=>1,
            'gula'=>5,
            'pasta_gigi'=>3,
            'sabun_piring'=>10,
            'detergen'=>8,
            'user_id'=>1,
            'created_at'=>'2023-06-24 09:23:41',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>9,
            'sandal'=>6,
            'lays'=>2,
            'cocacola'=>3,
            'tissue'=>8,
            'oil'=>4,
            'gula'=>1,
            'pasta_gigi'=>7,
            'sabun_piring'=>5,
            'detergen'=>10,
            'user_id'=>1,
            'created_at'=>'2023-07-14 17:42:59',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>5,
            'sandal'=>9,
            'lays'=>3,
            'cocacola'=>2,
            'tissue'=>7,
            'oil'=>1,
            'gula'=>8,
            'pasta_gigi'=>6,
            'sabun_piring'=>4,
            'detergen'=>10,
            'user_id'=>1,
            'created_at'=>'2023-08-19 12:34:56',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>6,
            'sandal'=>9,
            'lays'=>2,
            'cocacola'=>8,
            'tissue'=>3,
            'oil'=>1,
            'gula'=>5,
            'pasta_gigi'=>7,
            'sabun_piring'=>4,
            'detergen'=>10,
            'user_id'=>1,
            'created_at'=>'2023-09-26 15:18:43',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>7,
            'sandal'=>2,
            'lays'=>9,
            'cocacola'=>3,
            'tissue'=>8,
            'oil'=>1,
            'gula'=>6,
            'pasta_gigi'=>4,
            'sabun_piring'=>5,
            'detergen'=>10,
            'user_id'=>1,
            'created_at'=>'2023-10-17 20:15:32',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>9,
            'sandal'=>5,
            'lays'=>1,
            'cocacola'=>8,
            'tissue'=>3,
            'oil'=>4,
            'gula'=>7,
            'pasta_gigi'=>6,
            'sabun_piring'=>10,
            'detergen'=>2,
            'user_id'=>1,
            'created_at'=>'2023-11-22 14:37:59',
        ]);
        DB::table('purchases_store')->insert([
            'sepatu'=>6,
            'sandal'=>4,
            'lays'=>9,
            'cocacola'=>2,
            'tissue'=>3,
            'oil'=>1,
            'gula'=>7,
            'pasta_gigi'=>10,
            'sabun_piring'=>8,
            'detergen'=>5,
            'user_id'=>1,
            'created_at'=>'2023-12-11 18:23:42',
        ]);
    }
}