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
            $table->id('purchaseSupplier_id');
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
            $table->integer('totalprice');
            $table->foreignUuid('user_id')->default(1)->constraint();
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
