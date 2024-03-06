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
        Schema::create('order_lines', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('order_id')->constrained();
            $table->string('option');
            $table->string('reference');
            $table->string('description');
            $table->string('main_img');
            $table->string('brand', 50);
            $table->float('price_ht');
            $table->float('price_ttc');
            $table->float('price_vat');
            $table->float('weight');
            $table->integer('quantity');
            $table->float('vat');
            $table->integer('value_promotion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lines');
    }
};
