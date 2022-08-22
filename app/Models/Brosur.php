<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brosur extends Model
{
    use HasFactory;
    protected $table = 'brosurs';
    protected $fillable = [
        'id', 'title', 'description', 'image', 'file', 'created_at', 'updated_at'
    ];
}
