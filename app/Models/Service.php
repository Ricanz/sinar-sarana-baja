<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable = [
        'id',
        'title',
        'description',
        'slug',
        'status',
        'created_at',
        'updated_at'
    ];

    public function images()
    {
        return $this->hasMany(Gallery::class, 'parent_id', 'id')->where('type', 'service');
    }
}
