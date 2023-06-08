<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchase_suppliers', function (Blueprint $table) {
            $table->id('purchaseSupplier_id')->primary();
            $table->integer('sepatu')->nullable();
            $table->integer('sandal')->nullable();
            $table->integer('snack')->nullable();
            $table->integer('soda_kaleng')->nullable();
            $table->integer('tissue')->nullable();
            $table->integer('minyak_goreng')->nullable();
            $table->integer('gula')->nullable();
            $table->integer('pasta_gigi')->nullable();
            $table->integer('detergen')->nullable();
            $table->integer('lampu')->nullable();
            $table->integer('deterjen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_suppliers');
    }
};
