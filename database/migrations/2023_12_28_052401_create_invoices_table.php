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
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->primary('id');
            $table->decimal('total_amount');
            $table->decimal('tax')->default(0);
            $table->decimal('vat')->default(0);
            $table->decimal('discount')->default(0);
            $table->decimal('received_amount')->default(0);
            $table->foreignId('customer_id')->nullable();
            $table->foreignId('created_by');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
