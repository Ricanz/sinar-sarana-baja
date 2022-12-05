<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceIcon extends Model
{
    // use HasFactory;
    protected $table = 'service_icons';
    protected $fillable = [
        'title',
        'description',
        'image',
        'created_at',
        'updated_at'
    ];
}
