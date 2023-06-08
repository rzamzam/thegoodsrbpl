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
        Schema::create('purchases_store', function (Blueprint $table) {
            $table->id('purchase_id');
            $table->integer('sepatu')->nullable();
            $table->integer('sandal')->nullable();
            $table->integer('lays')->nullable();
            $table->integer('cocacola')->nullable();
            $table->integer('tissue')->nullable();
            $table->integer('oil')->nullable();
            $table->integer('gula')->nullable();
            $table->integer('pasta_gigi')->nullable();
            $table->integer('sabun_piring')->nullable();
            $table->integer('detergen')->nullable();
            $table->integer('totalprice')->nullable();
            $table->foreignUuid('user_id')->constraint();
            $table->timestamps();
        });
        // sepatu, sandal, snack, soda kaleng, tisue, minyak goreng, gula, pasta gigi, sabun cuci piring, deterjen
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
