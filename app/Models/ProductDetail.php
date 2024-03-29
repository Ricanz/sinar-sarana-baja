<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $table = 'product_details';
    protected $fillable = [
        'id', 'product_id', 'title', 'slug', 'description', 'is_product', 'new_page', 'status', 'created_at', 'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function images()
    {
        return $this->hasMany(Gallery::class, 'parent_id', 'id')->where('type', 'product');
    }
}
