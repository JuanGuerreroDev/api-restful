<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends User
{
    use HasFactory;

    protected $table = 'sellers';

    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',
    ];

    // relationships
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }
}
