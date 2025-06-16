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
       Schema::create('check_claims_payments', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('approved_claim_id');
    $table->decimal('amount', 10, 2);
    $table->string('check_number');
    $table->date('payment_date');
    $table->timestamps();

    // Foreign key
    $table->foreign('approved_claim_id')
          ->references('id')
          ->on('approved_claims')
          ->onDelete('cascade');
});

            
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_claims_payments');
    }
};