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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('reference', 50);
            $table->float('total_price', 8,2);
            $table->date('delivery_date')->nullable();
            $table->date('shipping_date')->nullable();
            $table->date('ordering_date');
            $table->float('delivery_fee', 4,2);
            $table->float('total_weight',8,2);
            $table->string('status',20);
            $table->foreignUuid('addresse_id')->constrained();
            $table->foreignUuid('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
