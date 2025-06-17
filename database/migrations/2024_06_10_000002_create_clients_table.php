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
        Schema::create('clients', function (Blueprint $table): void {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('sex');
            $table->integer('age')->unsigned();
            $table->string('address', 500); 
            $table->string('contact_number')->nullable();
            $table->string('valid_id')->unique();
            $table->unsignedBigInteger('assessed_by')->nullable(); // FIXED: only this one remains
            $table->unsignedBigInteger('municipality_id');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
            // Optional FK for assessed_by
            // $table->foreign('assessed_by')->references('user_id')->on('users')->onDelete('set null');
            $table->timestamps();     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
