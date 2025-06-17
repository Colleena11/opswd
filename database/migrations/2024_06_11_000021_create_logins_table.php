<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
{
    Schema::create('logins', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->timestamp('login_timestamp');
        $table->timestamp('logout_timestamp')->nullable();
        $table->timestamps();
    });
}

    public function down(): void {
        Schema::dropIfExists('logins');
    }
};