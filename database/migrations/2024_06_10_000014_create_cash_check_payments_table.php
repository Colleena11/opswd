<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cash_claims_payments', function (Blueprint $table) {
            $table->bigIncrements('id'); // cash claims payment id
            $table->unsignedBigInteger('approved_claim_id');
            $table->unsignedBigInteger('client_id');
            $table->date('date_prepared');
            $table->text('confirmed_people_today'); // store as JSON or comma-separated string
            $table->decimal('amount', 15, 2);
            $table->decimal('total_amount', 15, 2);
            $table->date('date_of_payout');
            $table->timestamps();

            $table->foreign('approved_claim_id')->references('id')->on('claims')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cash_claims_payments');
    }
};