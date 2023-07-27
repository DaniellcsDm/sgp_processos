<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selector extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'sub_category', 'external_code', 'description', 'is_principal'
    ];
}
