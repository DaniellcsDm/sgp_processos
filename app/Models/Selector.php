<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selector extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'subcategory', 'external_code', 'description', 'primary'
    ];
}