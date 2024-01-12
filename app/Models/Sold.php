<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sold extends Model {
    use HasFactory;

    protected $table = 'sold';
    protected $fillable = ['product_id', 'quantity_sold', 'price_sold'];
    public $timestamps = false;
}