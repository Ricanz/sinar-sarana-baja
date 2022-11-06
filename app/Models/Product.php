<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id', 'name', 'slug', 'image', 'status', 'short_desc', 'created_at', 'updated_at'
    ];

    public function details()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id')->where('is_product', 'y');
    }
}
