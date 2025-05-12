@extends('layouts.app')

@section('title', 'Book Now')

@section('content')
{{-- Hero Banner --}}
<div class="relative h-[300px] md:h-[400px] lg:h-[500px] w-full">
    {{-- Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/book-now-banner.jpg');"></div>

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    {{-- Text Content --}}
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-4">
        <h1 class="text-white text-4xl md:text-5xl font-bold mb-2">Book Now</h1>
        <p class="text-white text-lg md:text-xl">We're open for bookings even while the site is being updated</p>
    </div>
</div>
<div class="pt-6" style="background-color: #324c4f">
    <div class="max-w-6xl mx-auto p-8">

        {{-- Information Section --}}
        <div class="grid lg:grid-cols-2 gap-8 mb-12 small-text">
            {{-- Our Rates --}}
            <div class="bg-light-green shadow-md rounded-lg p-6">
                <h2 class="text-4xl font-semibold mb-4">Our Rates</h2>
                <h3 class="font-bold mb-2">1. Accommodation</h3>
                <p class="mb-4">Rate per night is dependent upon the actual size of the dog:</p>
                <ul class="list-disc list-outside pl-6 mb-4 text-gray-700">
                    <li>Small - RM80</li>
                    <li>Medium - RM90</li>
                    <li>Large - RM100</li>
                    <li>Extra Large - RM110</li>
                </ul>
                <p class="mb-4 text-gray-700">
                    A refundable Emergency Deposit of RM300 is required at check-in time.
                </p>

                <div class="mb-4">
                    <h4 class="font-semibold mb-2">Notes:</h4>
                    <ul class="list-disc list-outside pl-6 text-gray-700 space-y-2">
                        <li>Rate includes 1 night boarding, 2 x 1-hour play sessions and a complimentary bath before checking out.</li>
                        <li>Rate does not include food. The additional option of pedigree dog food is available at a charge.</li>
                        <li>Check-in time is 10am and check-out time is 12pm. An additional fee of RM50 will be charged for late check out from 2pm to 5pm. </br>
                            PLEASE NOTE that the office will be closed from 12pm to 2pm, and after 5pm.
                        </li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h4 class="font-semibold mb-2">Public Holidays Closure:</h4>
                    <ul class="list-decimal list-outside pl-6 text-gray-700 space-y-1">
                        <li>First Day Chinese New Year</li>
                        <li>Labour Day</li>
                        <li>National Day</li>
                        <li>Christmas Day</li>
                        <li>New Year's Day</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h3 class="font-bold mb-2">2. Grooming (Optional)</h3>
                    <ul class="list-disc list-outside pl-6 text-gray-700 space-y-2">
                        <li>A full range of professional grooming services are available.</li>
                        <li>Rates vary depending on the breed and condition of the dog.</li>
                        <li>If grooming is required, please check the option 'Grooming Service' on booking form. Please contact the office to confirm the rate.</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h3 class="font-bold mb-2">3. Pet Taxi (Optional)</h3>
                    <p class="text-gray-700 mb-2">
                        Rates depend on the distance of pick up and delivery addresses. </br>
                        <br><span class="italic">Note: Please call for accurate quote for Pet Taxi. Pick up & delivery service is from 10am to 4pm, Monday to Saturday only (excluding public holidays)</span>
                    </p>
                </div>

                <div>
                    <h3 class="font-bold mb-2">4. Swimming Pool (Optional)</h3>
                    <p class="text-gray-700">30 min swim (bath and blow dry) - RM50</p>
                </div>
            </div>

            {{-- Booking Information --}}
            <div class="bg-light-green shadow-md rounded-lg p-6 small-text">
                <h2 class="text-4xl font-semibold mb-4">Booking Information</h2>

                <h3 class="font-bold mb-2">Booking Steps:</h3>
                <ol class="list-decimal list-outside pl-6 text-gray-700 space-y-2 mb-6">
                    <li>Please complete and submit the online Booking Form.</li>
                    <li>We will respond via email within 3 working days to inform you of the availability of a place.</li>
                    <li>If the dates are available, you will be required to pay a 50% non-refundable booking deposit* and to send a up to date Vaccination Certificate from your vet to secure your booking:</li>
                    <li>Once you have placed your deposit with us, please email and attach a copy of the payment slip and vaccination certificate.</li>
                    <li>Your booking will be secured once these steps are completed.</li>
                </ol>

                <h3 class="font-bold mb-2">Payment Guidelines:</h3>
                <p class="text-gray-700 mb-4">
                    A deposit of 50% of the total boarding fees is required to secure your booking. This deposit is non-refundable. </br>
                </p>
                <p class="text-gray-700 mb-4">
                    Payment of the remaining 50% boarding fees plus any additional services payment needs to be paid in full at the time of check in (or upon collection of your pet if you are utilising the pet taxi service).
                </p>
                <p class="text-gray-700 mb-4">
                    A refundable emergency deposit of RM 300 must be paid at the time of check in (or upon collection of your pet if you are utilising the pet taxi service).
                </p>
                <p class="text-gray-700 mb-4">
                    We accept the following forms of payment: Bank transfer, Cheque, Cash
                </p>

                <h3 class="font-bold mb-2">Cancellation Policy:</h3>
                <p class="text-gray-700 mb-2">
                    In the event you decide to cancel or reduce your pet’s boarding period, all payments other than the Emergency Deposit are non-refundable.
                </p>
                <p class="text-gray-700">
                    For example if you book your pet to stay for 7 days and decide to collect your pet after 2 days, only the Emergency Deposit will be refunded.
                </p>

                <p class="mt-6 small-text">
                    Please also refer to our full terms and conditions <a href="{{ url('/terms-conditions') }}" target="_blank" class="tnc-here underline hover:text-indigo-800">HERE</a>.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="p-8" style="background-color: #4b6a55">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-2xl p-6 sm:p-8">
        <h2 class="text-3xl font-semibold green-text mb-6">Booking Form</h2>
        <form method="POST" action="{{ route('book-now.submit') }}" class="space-y-8">
            @csrf
        
            {{-- 🐾 Owner Details --}}
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-1">Owner Details</h3>

                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">First Name <span class="text-red-600">*</span></label>
                            <input type="text" name="first_name" class="w-full border border-gray-300 rounded-lg p-3" required value="{{ old('first_name') }}">
                            @error('first_name')<p class="text-red-600 text-sm mt-2">Please enter your first name.</p>@enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Last Name <span class="text-red-600">*</span></label>
                            <input type="text" name="last_name" class="w-full border border-gray-300 rounded-lg p-3" required value="{{ old('last_name') }}">
                            @error('last_name')<p class="text-red-600 text-sm mt-2">Please enter your last name.</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email Address <span class="text-red-600">*</span></label>
                        <input type="email" name="email" class="w-full border border-gray-300 rounded-lg p-3" required value="{{ old('email') }}">
                        @error('email')<p class="text-red-600 text-sm mt-2">Please enter a valid email address.</p>@enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Mobile Phone Number <span class="text-red-600">*</span></label>
                            <input type="text" name="mobile_phone" class="w-full border border-gray-300 rounded-lg p-3" required value="{{ old('mobile_phone') }}">
                            @error('mobile_phone')<p class="text-red-600 text-sm mt-2">Please provide a valid mobile number.</p>@enderror
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Home Phone Number</label>
                            <input type="text" name="home_phone" class="w-full border border-gray-300 rounded-lg p-3" value="{{ old('home_phone') }}">
                            @error('home_phone')<p class="text-red-600 text-sm mt-2">Please provide a valid home number.</p>@enderror
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Emergency Contact Person <span class="text-red-600">*</span></label>
                            <input type="text" name="emergency_contact" class="w-full border border-gray-300 rounded-lg p-3" required value="{{ old('emergency_contact') }}">
                            @error('emergency_contact')<p class="text-red-600 text-sm mt-2">Please provide an emergency contact name.</p>@enderror
                        </div>

                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Emergency Phone Number <span class="text-red-600">*</span></label>
                            <input type="text" name="emergency_phone_number" class="w-full border border-gray-300 rounded-lg p-3" required value="{{ old('emergency_phone_number') }}">
                            @error('emergency_phone_number')<p class="text-red-600 text-sm mt-2">Please provide a valid emergency contact number.</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Address <span class="text-red-600">*</span></label>
                        <textarea name="address" rows="3" class="w-full border border-gray-300 rounded-lg p-3" required>{{ old('address') }}</textarea>
                        @error('address')<p class="text-red-600 text-sm mt-2">Please enter your full address.</p>@enderror
                    </div>
                </div>
            </div>

            <!-- Reservation Details Section -->
            <div class="mt-10">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-1">Reservation Details</h3>

                <!-- Check-In Subsection -->
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Check In</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Check-In Date <span class="text-red-600">*</span></label>
                            <input type="date" id="check_in_date" name="check_in_date" required class="w-full border border-gray-300 rounded-lg p-3" min="{{ \Carbon\Carbon::today()->format('Y-m-d') }}" value="{{ old('check_in_date') }}">
                            @error('check_in_date')<p class="text-red-600 text-sm mt-2">Please select a check-in date.</p>@enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Check-In Time <span class="text-red-600">*</span></label>
                            <select name="check_in_time" required class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base">
                                <option value="">Please select a time</option>
                                @foreach (['9:00 AM','10:00 AM','10:30 AM','11:00 AM','11:30 AM','12:00 PM','12:30 PM','1:00 PM','1:30 PM','2:00 PM','2:30 PM','3:00 PM','3:30 PM','4:00 PM','4:30 PM','5:00 PM'] as $time)
                                  <option value="{{ $time }}" {{ old('check_in_time') === $time ? 'selected' : '' }}>{{ $time }}</option>
                                @endforeach
                                @error('check_in_time')<p class="text-red-600 text-sm mt-2">Please select a check-in time.</p>@enderror
                            </select>
                        </div>
                          
                        <div class="md:col-span-2">
                            <span class="block text-gray-700">Taxi required for check-in? <span class="text-red-600">*</span></span>
                            <label class="inline-flex items-center">
                                <div class="flex items-center gap-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="check_in_taxi" value="No" {{ old('check_in_taxi', 'No') == 'No' ? 'checked' : '' }}>
                                        <span class="text-gray-700 pl-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="check_in_taxi" value="Yes" {{ old('check_in_taxi') == 'Yes' ? 'checked' : '' }}>
                                        <span class="text-gray-700 pl-2">Yes</span>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Check-Out Subsection -->
                <div class="space-y-4 mt-6">
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Check Out</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Check-Out Date <span class="text-red-600">*</span></label>
                            <input type="date" name="check_out_date" required class="w-full border border-gray-300 rounded-lg p-3" value="{{ old('check_out_date') }}">
                            @error('check_out_date')<p class="text-red-600 text-sm mt-2">Please select a check-out date.</p>@enderror
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Check-Out Time <span class="text-red-600">*</span></label>
                            <select name="check_out_time" required class="w-full border border-gray-300 rounded-lg p-3 text-sm sm:text-base">
                                <option value="">Please select a time</option>
                                @foreach (['10:00 AM','10:30 AM','11:00 AM','11:30 AM','12:00 PM','12:30 PM','1:00 PM','1:30 PM','2:00 PM','2:30 PM','3:00 PM','3:30 PM','4:00 PM','4:30 PM','5:00 PM'] as $time)
                                  <option value="{{ $time }}" {{ old('check_out_time') === $time ? 'selected' : '' }}>{{ $time }}</option>
                                @endforeach
                                @error('check_out_time')<p class="text-red-600 text-sm mt-2">Please select a check-out time.</p>@enderror
                            </select>
                            <small class="block mt-1">
                                Normal checkout hours are from <span class="font-semibold">10:00 AM to 12:00 PM</span>. 
                                Late checkout (after <span class="font-semibold">12:00 PM</span>) will incur a <span class="font-semibold text-red-500">RM50 fee</span>.
                            </small>
                        </div>
                        <div class="md:col-span-2">
                            <span class="block text-gray-700">Taxi required for check-out? <span class="text-red-600">*</span></span>
                            <label class="inline-flex items-center">
                                <div class="flex items-center gap-4">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="check_out_taxi" value="No" {{ old('check_out_taxi', 'No') == 'No' ? 'checked' : '' }}>
                                        <span class="text-gray-700 pl-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="check_out_taxi" value="Yes" {{ old('check_out_taxi') == 'Yes' ? 'checked' : '' }}>
                                        <span class="text-gray-700 pl-2">Yes</span>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pet Details Section -->
            <div x-data="{dogs: {{ json_encode(old('dogs', [['id' => 1, 'neutered' => 0]])) }}}" class="space-y-6 mt-10">
                <h3 class="text-xl font-semibold text-gray-800 border-b pb-1">Pet Details</h3>

                <template x-for="(dog, index) in dogs" :key="dog.id">
                    <div class="border border-gray-200 rounded-xl p-6 space-y-4 bg-gray-50">
                        <h4 class="text-lg font-semibold green-text">Dog <span x-text="index + 1"></span></h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Name <span class="text-red-600">*</span></label>
                                <input type="text" :name="'dogs[' + index + '][name]'" x-model="dogs[index].name" required class="w-full border border-gray-300 rounded-lg p-3">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Breed <span class="text-red-600">*</span></label>
                                <input type="text" :name="'dogs[' + index + '][breed]'" x-model="dogs[index].breed" required class="w-full border border-gray-300 rounded-lg p-3">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Age <span class="text-red-600">*</span></label>
                                <input type="number" :name="'dogs[' + index + '][age]'" x-model="dogs[index].age" min="0" class="w-full border border-gray-300 rounded-lg p-3">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Color <span class="text-red-600">*</span></label>
                                <input type="text" :name="'dogs[' + index + '][color]'" x-model="dogs[index].color" required class="w-full border border-gray-300 rounded-lg p-3">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Sex <span class="text-red-600">*</span></label>
                                <select :name="'dogs[' + index + '][sex]'" x-model="dogs[index].sex" required class="w-full border border-gray-300 rounded-lg p-3">
                                    <option value="">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input type="hidden" :name="'dogs[' + index + '][neutered]'" value="0">
                                <input type="checkbox"
                                       :name="'dogs[' + index + '][neutered]'"
                                       :value="1"
                                       x-model="dogs[index].neutered"
                                       :checked="'dogs[' + index + '].neutered' == 1"
                                       class="h-5 w-5 text-indigo-600 border-gray-300 rounded">
                                <label class="text-gray-700 text-sm sm:text-base">Neutered?</label>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-1">Grooming Required <span class="text-red-600">*</span></label>
                                <select :name="'dogs[' + index + '][grooming]'" x-model="dogs[index].grooming" required class="w-full border border-gray-300 rounded-lg p-3">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 font-medium mb-1">Any special medical or feeding requirements?</label>
                                <textarea :name="'dogs[' + index + '][requirements]'" rows="3" x-model="dogs[index].requirements" class="w-full border border-gray-300 rounded-lg p-3"></textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 font-medium mb-1">Any illnesses or disabilities?</label>
                                <textarea :name="'dogs[' + index + '][illnesses]'" rows="3" x-model="dogs[index].illnesses" class="w-full border border-gray-300 rounded-lg p-3"></textarea>
                            </div>
                        </div>
                        <button type="button" @click="dogs.splice(index, 1)" x-show="dogs.length > 1" class="text-red-600 mt-4">Remove Dog</button>
                    </div>
                </template>

                <button type="button" @click="dogs.push({ id: Date.now() })" class="green-button text-white font-bold py-2 px-4 rounded-lg">
                    + Add Another Dog
                </button>
            </div>

            <!-- Vet Details Section -->
            <div class="mt-10">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-1">Vet Details</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Name of Vet <span class="text-red-600">*</span></label>
                        <input type="text" name="vet_name" class="w-full border border-gray-300 rounded-lg p-3" value="{{ old('vet_name') }}" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Contact Number of Vet <span class="text-red-600">*</span></label>
                        <input type="text" name="vet_contact" class="w-full border border-gray-300 rounded-lg p-3" value="{{ old('vet_contact') }}" required>
                    </div>
                </div>
            </div>

            <!-- Acknowledgement Section -->
            <div class="mt-10">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-1">Acknowledgement</h3>
                <div>
                    <label class="inline-flex items-start gap-2 text-sm text-gray-700">
                        <input type="checkbox" name="terms_accepted" class="mt-1" required>
                        I have read and agree to the
                        <a href="{{ url('/terms-conditions') }}" target="_blank" class="text-indigo-600 underline">terms and conditions</a> <span class="text-red-600">*</span>
                    </label>
                </div>
            </div>
            @error('terms_accepted')
                <p class="text-red-600 text-sm mt-2 text-center">Please agree to the terms and conditions.</p>
            @enderror

            {{-- reCAPTCHA --}}
            <div class="flex justify-center">
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
            </div>
            @error('g-recaptcha-response')
                <p class="text-red-600 text-sm mt-2 text-center">Please verify that you are not a robot.</p>
            @enderror
        
            {{-- Submit --}}
            <div class="text-center">
                <button type="submit" class="green-button text-white font-bold py-3 px-10 rounded-lg transition">
                    Submit Booking Request
                </button>
            </div>
        </form>
    </div>
</div>

{{-- reCAPTCHA Script --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('scripts')
<!-- Make sure to include AlpineJS -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkInDate = document.querySelector('input[name="check_in_date"]');
        const checkOutDate = document.querySelector('input[name="check_out_date"]');

        if (checkInDate && checkOutDate) {
            checkInDate.addEventListener('change', function () {
                checkOutDate.min = checkInDate.value;
            });

            // Set initial min if check-in already selected
            if (checkInDate.value) {
                checkOutDate.min = checkInDate.value;
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        const checkInInput = document.getElementById('check_in_date');
        const checkOutInput = document.getElementById('check_out_date');
    
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');
        const formattedToday = `${yyyy}-${mm}-${dd}`;
    
        checkInInput.min = formattedToday;
    
        const checkInDateInput = document.querySelector('input[name="check_in_date"]');
        const checkOutDateInput = document.querySelector('input[name="check_out_date"]');

        checkInInput.addEventListener('input', function () {
            if (checkInDateInput.value < formattedToday) {
                alert("Check-in date cannot be in the past.");
                checkInDateInput.value = formattedToday;
            }
        });
    
        checkOutInput.addEventListener('input', function () {
            if (checkOutDateInput.value && checkOutDateInput.value < checkInDateInput.value) {
                alert("Check-out date cannot be earlier than check-in date.");
                checkOutDateInput.value = "";
            }
        });
    });
</script>