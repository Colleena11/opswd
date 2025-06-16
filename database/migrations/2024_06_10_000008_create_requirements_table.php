<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id'); // requirement id
            $table->unsignedBigInteger('assistance_type_id');
            $table->string('requirement_name');
            $table->timestamps();

            $table->foreign('assistance_type_id')->references('id')->on('assistance_types')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('requirements');
    }
};