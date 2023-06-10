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
            $table->string('alamat');
            $table->integer('sepatu');
            $table->integer('sandal');
            $table->integer('lays');
            $table->integer('cocacola');
            $table->integer('tissue');
            $table->integer('oil');
            $table->integer('gula');
            $table->integer('pasta_gigi');
            $table->integer('sabun_piring');
            $table->integer('detergen');
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
