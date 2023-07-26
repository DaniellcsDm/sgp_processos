<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $fillable = [
        'active_party', 'lawyer_active_party', 'passive_party', 'lawyer_passive_party',
        'process_number', 'filing_date', 'judicial_body', 'judge', 'action_class',
        'subjects', 'additional_information', 'uploaded_files'
    ];

    public function activePartySelector()
    {
        return $this->belongsTo(Selector::class);
    }

    public function passivePartySelector()
    {
        return $this->belongsTo(Selector::class);
    }

    public function actionClassSelector()
    {
        return $this->belongsTo(Selector::class);
    }

    public function activePartyLawyers()
    {
        return $this->hasMany(Lawyer::class);
    }

    public function passivePartyLawyers()
    {
        return $this->hasMany(Lawyer::class);
    }



}
