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
        Schema::create(table: 'clients', callback: function (Blueprint $table) :void {
            $table->id();
            $table->string('first name');
            $table->string('middle name');
            $table->string('last name');
            $table->string('sex');
            $table->integer('age') ->unsigned();
            $table->string('address', 500); 
            $table->integer('contact_number')->nullable();
            $table->string('valid_id')->unique();
            $table->string('assessed_by');
            $table->unsignedBigInteger('municipality_id');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
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