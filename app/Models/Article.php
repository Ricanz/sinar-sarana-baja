<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'id',
        'title',
        'description',
        'slug',
        'image',
        'status',
        'short_desc',
        'created_at',
        'updated_at'
    ];
}
