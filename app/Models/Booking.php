<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    
    protected $fillable = [
        // Owner Details
        'first_name',
        'last_name',
        'email',
        'mobile_phone',
        'home_phone',
        'emergency_contact',
        'emergency_phone_number',
        'address',
    
        // Reservation Details
        'check_in_date',
        'check_in_time',
        'check_in_taxi',
        'check_out_date',
        'check_out_time',
        'check_out_taxi',
    
        // Vet Details
        'vet_name',
        'vet_contact',
    
        // Pet Details
        'dogs', // store this as JSON

        'booking_data'
    ];

    public static function storeBooking(array $data)
    {
        return self::create($data);
    }
}

