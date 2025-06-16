<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('payees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('relationship');
            $table->string('proof_of_relationship');
            $table->boolean('update_to_new_payee')->default(false);
            $table->string('previous_payee_name')->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payees');
    }
};