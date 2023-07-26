<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('birth_date')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf_cnpj');
            $table->enum('gender', ['Masculino', 'Feminino', 'Indefinido'])->nullable();
            $table->string('registration_number');
            $table->string('education')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('commercial_email')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('whatsapp_1')->nullable();
            $table->string('whatsapp_2')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->string('address_number')->nullable();
            $table->string('address_complement')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->date('inclusion_date')->nullable();
            $table->enum('status', ['Ativo', 'Inativo', 'Bloqueado']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
