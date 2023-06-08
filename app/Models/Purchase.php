<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = ['purchase_id'];
    protected $table = 'purchases_store';
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
