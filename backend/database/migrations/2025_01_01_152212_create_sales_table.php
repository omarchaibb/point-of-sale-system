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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->onDelete('set null'); // Link to customer (optional)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Link to the user (employee/admin) who made the sale
            $table->decimal('total_amount', 10, 2); // Total sale amount
            $table->enum('payment_method', ['cash', 'credit_card', 'bank_transfer', 'other']); // Payment method
            $table->timestamp('sale_date')->useCurrent(); // Date of sale
            $table->enum('status', ['completed', 'pending', 'cancelled']); // Sale status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
