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
        Schema::create('event_tickets', function (Blueprint $table) {
    $table->id('event_ticket_id');

    $table->foreignId('event_id')->constrained('events','event_id')->cascadeOnDelete();

    $table->enum('ticket_type', ['VIP','REGULAR','PRESALE']);
    $table->decimal('price', 12, 2);
    $table->integer('stock');
    $table->integer('max_buy_per_order');
    $table->enum('status', ['available','sold_out'])->default('available');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_tickets');
    }
};
