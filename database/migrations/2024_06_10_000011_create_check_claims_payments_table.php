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
            $table->bigIncrements('id'); // check claims payment id
            $table->unsignedBigInteger('approved_claim_id');
            $table->unsignedBigInteger('client_id');
            $table->date('date_prepared');
            $table->decimal('amount', 15, 2);
            $table->string('check_number');
            $table->date('date_claimed')->nullable();
            $table->enum('status', ['pending', 'claimed', 'cancelled'])->default('pending');
            $table->boolean('pending_due_to_payee_change')->default(false);
            $table->timestamps();

            $table->foreign('approved_claim_id')->references('id')->on('claims')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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