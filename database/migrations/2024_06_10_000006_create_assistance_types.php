<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
  Schema::create('assistance_types', function (Blueprint $table) {
   $table->bigIncrements('id');
$table->string('type_name');
$table->timestamps();
});

    }

    public function down(): void
    {
        Schema::dropIfExists('assistance_types');
    }
};