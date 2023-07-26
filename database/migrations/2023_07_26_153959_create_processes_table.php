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
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('active_party_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('passive_party_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('active_lawyer_id')->constrained('lawyers')->onDelete('cascade');
            $table->foreignId('passive_lawyer_id')->constrained('lawyers')->onDelete('cascade');
            $table->string('number')->unique();
            $table->string('court');
            $table->string('judge');
            $table->string('action_class');
            $table->string('subject');
            $table->decimal('value', 10, 2);
            $table->enum('status', ['Ativo', 'Inativo', 'Concluído', 'Arquivado']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processes');
    }
};
