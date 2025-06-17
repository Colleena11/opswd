<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assistance_categories', function (Blueprint $table) {
            $table->bigIncrements('id'); // assistance category id
            $table->unsignedBigInteger('assistance_type_id');
            $table->string('assistance_category');
            $table->timestamps();

            $table->foreign('assistance_type_id')->references('id')->on('assistance_types')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assistance_categories');
    }
};