<?php

namespace App\Http\Controllers;

use App\Mail\Booking;
use App\Mail\BookingConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function showForm()
    {
        return view('book-now', [
            'oldDogs' => old('dogs', [['id' => 1]])
        ]);
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            // Owner Details
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'home_phone' => 'nullable|string|max:30',
            'mobile_phone' => 'required|string|max:30',
            'emergency_contact' => 'required|string|max:100',
            'emergency_phone_number' => 'required|string|max:30',
            'address' => 'required|string|max:255',

            // Vet Details
            'vet_name' => 'required|string|max:100',
            'vet_contact' => 'required|string|max:30',

            // Reservation Details
            'check_in_date' => 'required|date',
            'check_in_time' => 'required',
            'check_in_taxi' => 'required|string|in:Yes,No',
            'check_out_date' => 'required|date|after:check_in_date',
            'check_out_time' => 'required',
            'check_out_taxi' => 'required|string|in:Yes,No',

            // Acknowledgement
            'terms_accepted' => 'accepted',

            // Dogs array
            'dogs' => 'required|array|min:1',
            'dogs.*.name' => 'required|string|max:100',
            'dogs.*.breed' => 'required|string|max:100',
            'dogs.*.age' => 'required|numeric|min:0',
            'dogs.*.color' => 'required|string|max:100',
            'dogs.*.sex' => 'required|string|in:Male,Female',
            'dogs.*.neutered' => 'boolean',
            'dogs.*.grooming' => 'required|string|in:Yes,No',
            'dogs.*.requirements' => 'nullable|string|max:500',
            'dogs.*.illnesses' => 'nullable|string|max:500',

            // Recaptcha
            'g-recaptcha-response' => ['required', function ($attribute, $value, $fail) {
                $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $value,
                ]);

                if (!optional($response->object())->success) {
                    $fail('Please verify that you are not a robot.');
                }
            }],
        ]);

        $booking = $validated;

        // Send confirmation email to user
        Mail::to($booking['email'])->send(new BookingConfirmation($booking));
        
        // Send confirmation email to admin
        Mail::to(['keithgan96@gmail.com'])->send(new Booking($booking));
        // Mail::to(['enquiries@doghousebroga.com', 'doghousebroga@yahoo.com'])->send(new BookingConfirmation($booking));
    
        return redirect()->route('thank-you')->with('success', 'Booking submitted successfully!');
    }
}
