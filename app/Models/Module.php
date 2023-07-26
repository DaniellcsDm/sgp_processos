<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'position',
        'icon',
        'status',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
