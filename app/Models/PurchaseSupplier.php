<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseSupplier extends Model
{
    protected $table = 'purchase_suppliers';
    protected $guarded = ['purchaseSupplier_id'];
    use HasFactory;
}
