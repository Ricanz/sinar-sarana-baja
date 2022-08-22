<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';
    protected $fillable = [
        'id', 'title', 'description', 'image', 'file', 'created_at', 'updated_at'
    ];
}
