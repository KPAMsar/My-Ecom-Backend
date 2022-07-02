<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminManageProduct extends Model
{
    use HasFactory;
    protected $table = 'manage_products';
    Protected $fillable = [
        'product_name',
        'product_price',
        'product_category',
        'product_quantity',
        'product_url',
        'product_description'
    ];
}
