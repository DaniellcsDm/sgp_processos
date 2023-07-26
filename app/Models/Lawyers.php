<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyers extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name', 'date_of_birth', 'rg', 'cpf_cnpj', 'gender',
        'registration_number', 'education', 'birthplace', 'marital_status',
        'personal_email', 'business_email', 'parentage', 'whatsapp_i', 'whatsapp_ii',
        'cep', 'address', 'address_number', 'address_complement', 'neighborhood',
        'city', 'state', 'date_inclusion', 'status'
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
