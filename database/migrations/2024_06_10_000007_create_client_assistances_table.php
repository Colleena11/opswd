<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('client_assistances', function (Blueprint $table) {
    $table->bigIncrements('client_assistance_id');
    $table->unsignedBigInteger('client_id');
    $table->unsignedBigInteger('assistance_type_id');
    $table->string('source_of_fund');
    $table->date('date_received_request');
    $table->enum('status', ['approved', 'disapproved'])->default('disapproved');
    $table->dateTime('date_status_changed')->nullable();
    $table->unsignedBigInteger('payee_id')->nullable();
    $table->timestamps();

    // Foreign keys
    $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
    $table->foreign('assistance_type_id')->references('id')->on('assistance_types')->onDelete('cascade');
    $table->foreign('payee_id')->references('id')->on('payees')->onDelete('set null'); // ✅ FIXED HERE
});
    }

    public function down(): void
    {
        Schema::dropIfExists('client_assistances');
    }
};