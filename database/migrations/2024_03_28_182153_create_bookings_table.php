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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contracts_id')->constrained('contracts')->onDelete('cascade');
            $table->date('booking_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('total_cost', 10, 2);
            $table->enum('status_of_payment', ['paid', 'pending']);
            $table->string('payment_method', 100);
            $table->string('transaction_id', 100);
            $table->enum('booking_status', ['confirmed', 'pending', 'canceled']);
            $table->integer('number_of_guests');
            $table->time('check_in');
            $table->time('check_out');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
