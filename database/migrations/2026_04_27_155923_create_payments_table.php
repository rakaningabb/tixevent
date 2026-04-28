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
    $table->id('payment_id');

    $table->foreignId('order_id')->constrained('orders','order_id')->cascadeOnDelete();

    $table->enum('payment_method', ['transfer','ewallet','card']);
    $table->decimal('amount', 12, 2);
    $table->string('payment_proof')->nullable();

    $table->enum('payment_status', ['pending','verified','rejected'])->default('pending');
    $table->timestamp('paid_at')->nullable();

    $table->timestamp('created_at')->useCurrent();
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
