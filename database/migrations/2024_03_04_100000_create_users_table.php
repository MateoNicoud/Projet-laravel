<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();

            //$table->foreignUuid('credential_id')->constrained();
            $table->foreignUuid('credential_id')->constrained();
            $table->string('first_name')->nullable();
            $table->string('name')->nullable();
            $table->string('pseudo')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
