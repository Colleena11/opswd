<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('client_assistances', function (Blueprint $table) {
    $table->id();

    // THIS IS CRITICAL
    $table->foreignId('assistance_type_id')
          ->constrained('assistance_types')
          ->onDelete('cascade');

    $table->timestamps();
});

    }

    public function down(): void
    {
        Schema::dropIfExists('client_assistances');
    }
};