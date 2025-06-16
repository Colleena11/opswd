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
       // 2024_06_10_000008_create_approved_claims_table.php



Schema::create('approved_claims', function (Blueprint $table) {
    $table->id(); // creates: id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY


    $table->unsignedBigInteger('approved_claim_id')->nullable(); // or without nullable

    $table->unsignedBigInteger('client_id');
    $table->unsignedBigInteger('client_assistance_id');
    $table->decimal('amount_prepared', 10, 2);
    $table->date('date_cafoa_prepared')->nullable();
    $table->date('date_pgo_received')->nullable();
    $table->date('date_pto_received')->nullable();
    $table->string('form_of_payment', 50)->nullable();
    $table->enum('confirmation', ['check', 'cash'])->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approved_claims');
    }
};