<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cash_disbursements', function (Blueprint $table) {
            $table->bigIncrements('id'); // cash disbursement id
            $table->unsignedBigInteger('cash_claims_payment_id');
            $table->unsignedBigInteger('client_id');
            $table->decimal('amount', 15, 2);
            $table->date('confirmation_date')->nullable();
            $table->date('date_received_claimed')->nullable();
            $table->date('date_released_total')->nullable();
            $table->decimal('amount_claimed', 15, 2)->nullable();
            $table->timestamps();

            $table->foreign('cash_claims_payment_id')->references('id')->on('cash_claims_payments')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_disbursements');
    }
};