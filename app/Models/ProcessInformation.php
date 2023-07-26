<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'process_id',
        'title',
        'description',
        'inclusion_date',
    ];

    public function process()
    {
        return $this->belongsTo(Process::class);
    }
}
