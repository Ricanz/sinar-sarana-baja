<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDetail extends Model
{
    // use HasFactory;
    protected $table = 'sub_details';
    protected $fillable = [
        'id', 'product_detail_id', 'title', 'slug', 'description', 'status', 'created_at', 'updated_at'
    ];

    public function detail()
    {
        return $this->belongsTo(ProductDetail::class, 'product_detail_id');
    }
}
