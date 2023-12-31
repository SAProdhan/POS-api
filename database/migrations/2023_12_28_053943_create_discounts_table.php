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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('discount_type');
            $table->decimal('amount');
            $table->date('start_from')->nullable();
            $table->date('end_at')->nullable();
            $table->boolean('status')->default(true);
            $table->string('promotion_type')->default('discount'); //discount, voucher
            $table->decimal('minimum_purchase_amount')->nullable();
            $table->decimal('maximum_discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
