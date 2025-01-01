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
        Schema::create('sales_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sale_id')->constrained('sales')->onDelete('cascade'); // Link to the sale this item belongs to
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Link to the product being sold
            $table->integer('quantity'); // Quantity sold
            $table->decimal('unit_price', 10, 2); // Price of the product at the time of sale
            $table->decimal('total_price', 10, 2); // Total price for this product in this sale (quantity * unit_price)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_items');
    }
};
