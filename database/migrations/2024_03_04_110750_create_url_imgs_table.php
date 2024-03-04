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
        Schema::create('url_imgs', function (Blueprint $table) {
            $table->id();
            $table->string('main_img');
            $table->string('back_img');
            $table->string('left_img');
            $table->string('right_img');
            $table->string('front_img');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('url_imgs');
    }
};
