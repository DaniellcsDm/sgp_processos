<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessFile extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'process_id',
        'title',
        'attachment',
        'inclusion_date',
    ];

    public function process()
    {
        return $this->belongsTo(Process::class);
    }
}
