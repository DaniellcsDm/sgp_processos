<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'role',
        'full_name',
        'birth_date',
        'rg',
        'cpf_cnpj',
        'gender',
        'profession',
        'education',
        'birth_place',
        'marital_status',
        'personal_email',
        'commercial_email',
        'mother_name',
        'father_name',
        'whatsapp_1',
        'whatsapp_2',
        'zip_code',
        'address',
        'address_number',
        'address_complement',
        'neighborhood',
        'city',
        'state',
        'inclusion_date',
        'status',
    ];

    public function genderSelector()
    {
        return $this->belongsTo(Selector::class);
    }

    public function educationSelector()
    {
        return $this->belongsTo(Selector::class);
    }


}
