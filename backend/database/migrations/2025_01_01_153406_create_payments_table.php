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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2); // Amount paid
            $table->enum('payment_method', ['cash', 'credit_card', 'bank_transfer', 'other']); // Payment method
            $table->timestamp('payment_date')->useCurrent(); // Date of payment
            $table->string('transaction_id')->nullable(); // For external payment gateways (optional)
            $table->foreignId('sale_id')->constrained('sales'); // Link to the sale
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
