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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('user_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('lawyer_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('password');
            $table->enum('status', ['Ativo', 'Inativo', 'Bloqueado'])->default('Ativo');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
