<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 255);
            $table->string('home_phone', 30)->nullable();
            $table->string('mobile_phone', 30);
            $table->string('emergency_contact', 100);
            $table->string('emergency_phone_number', 30);
            $table->string('address', 255);
    
            // Vet details
            $table->string('vet_name', 100);
            $table->string('vet_contact', 100);
    
            // Booking details
            $table->date('check_in_date');
            $table->string('check_in_time');
            $table->string('check_in_taxi');
            $table->date('check_out_date');
            $table->string('check_out_time');
            $table->string('check_out_taxi');
            
            // Dogs
            $table->json('dogs');
             
            $table->json('booking_data');
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
