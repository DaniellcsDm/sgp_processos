<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    use HasFactory;

    protected $fillable = [
        'active_party_id',
        'passive_party_id',
        'active_lawyer_id',
        'passive_lawyer_id',
        'number',
        'court',
        'judge',
        'action_class',
        'subject',
        'value',
        'status',

        
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
