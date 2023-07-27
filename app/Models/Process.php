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
        'status'
    ];

    public function activeParty()
    {
        return $this->belongsTo(Client::class, 'active_party_id');
    }

    public function passiveParty()
    {
        return $this->belongsTo(Client::class, 'passive_party_id');
    }

    public function activeLawyer()
    {
        return $this->belongsTo(Lawyer::class, 'active_lawyer_id');
    }

    public function passiveLawyer()
    {
        return $this->belongsTo(Lawyer::class, 'passive_lawyer_id');
    }


}
