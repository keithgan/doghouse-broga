@extends('layouts.app')

@section('title','Facilities & Services')
@section('meta_description','With Dog Villas, Play Areas, a Swimming Pool and our Experience & Security, Doghouse Broga is the ideal getaway for your pet!')

@section('content')

	<!-- Page header -->

	<div class="relative h-[300px] md:h-[400px] lg:h-[500px] w-full">
		{{-- Background Image --}}
		<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/facilities/facilities-banner.jpg');"></div>

		{{-- Overlay --}}
		<div class="absolute inset-0 bg-black bg-opacity-50"></div>

		{{-- Text Content --}}
		<div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-4">
				<h1 class="text-white text-4xl md:text-5xl font-bold mb-2">Facilities & Services</h1>
				<p class="text-white text-lg md:text-xl">How we can be of assistance to you</p>
		</div>
	</div>
	<!-- Dog Villas -->
	<section class="py-16" style="background-color: #819D7C">
		<div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
			<img src="/images/facilities/villas.jpg" alt="Dog Villas" class="rounded-2xl shadow-lg">
			<div>
				<h2 class="text-2xl font-semibold">Dog Villas</h2>
				<ul class="mt-4 list-disc list-outside pl-6 space-y-2 text-slate-700">
					<li>6 dog villas: 4 units of 12’x8’, 2 units of 8’x4’</li>
					<li>Boarding facilities are based on a sharing basis; the number of dogs sharing each villa depends on the size of the breed.</li>
					<li>Each villa is fitted with ceiling fans, mosquito netting and excellent ventilation.</li>
					<li>Each villa has an open deck for “chill out time” and has its own courtyard and play area.</li>
					<li>Bedding and toys are provided.</li>
					<li>All villas are cleaned twice daily; hygiene is of great importance to us.</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Play Areas -->
	<section class="py-16" style="background-color: #65866D">
		<div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
			<div>
				<h2 class="text-2xl font-semibold">Outdoor & Indoor Play Areas</h2>
				<ul class="mt-4 list-disc list-outside pl-6 space-y-2 text-slate-700">
					<li>Additional to the courtyard within the villa, each day our experienced staff will be implementing a group play session on a big open field.</li>
					<li>The dogs are exercised and entertained with a variety of games allowing them to interact with people and other dogs throughout their stay at Doghouse Broga.</li>
				</ul>
			</div>
			<img src="/images/facilities/play-area.jpg" alt="Play Area" class="rounded-2xl shadow-lg">
		</div>
	</section>

	<!-- Swimming Pool -->
	<section class="relative bg-fixed bg-cover bg-center text-white" style="background-image:url('/images/facilities/swimming-pool.jpg'); height: 30rem;">
		<!-- full-height flex to vertically center -->
		<div class="flex items-center justify-center h-full px-6">
			<!-- Panel -->
			<div class="w-3/4 sm:w-3/4 md:w-2/3 lg:w-2/3 bg-black bg-opacity-50 rounded-2xl p-12 md:p-10 text-left">
				<h2 class="text-3xl md:text-3xl font-light leading-tight">Swimming Pool</h2>
				<p class="mt-4 text-sm md:text-md">Fully supervised water play sessions.</p>
				<p class="mt-4 text-sm md:text-base italic opacity-90">
					*Additional rates applied on the water play session. Please refer to the section entitled “Our Rates” <a href="{{ url('/book-now') }}" target="_blank" class="here-redirect">HERE</a>
				</p>
			</div>
		</div>
	</section>

	<!-- Experience & Security -->
	<section class="py-16" style="background-color: #819D7C">
		<div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
			<img src="/images/facilities/security.jpg" alt="Security" class="rounded-2xl shadow-lg">
			<div>
				<h2 class="text-2xl font-semibold">Experience & Security</h2>
				<ul class="mt-4 list-disc list-outside pl-6 space-y-2 text-slate-700">
					<li>Our staff have over 18 years of experience and are on the site 24 hours a day, 7 days a week.</li>
					<li>The Doghouse is closely monitored by staff.</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Services -->
    <section class="py-16" style="background-color:#65866D">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center text-black">Services</h2>

            <!-- Services grid -->
            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-2">
                <div class="bg-white bg-opacity-30 backdrop-filter backdrop-blur rounded-2xl p-6 border border-white border-opacity-20">
                    <h3 class="text-xl font-semibold text-emerald-700">Grooming Services</h3>
                    <ul class="mt-3 list-disc list-outside pl-6 text-gray-800 leading-relaxed">
                    <li>Full professional grooming service is available. The rates for these sessions are based on the breed and condition of the dog. If grooming is required, please check the option “Grooming Service” in the booking form.</li>
                    <li>All dogs will receive a complimentary bath prior to departure.</li>
                    </ul>
                </div>

                <div class="bg-white bg-opacity-30 backdrop-filter backdrop-blur rounded-2xl p-6 border border-white border-opacity-20">
                    <h3 class="text-xl font-semibold text-emerald-700">Pet Taxi</h3>
                    <ul class="mt-3 list-disc list-outside pl-6 text-gray-800 leading-relaxed">
                    <li>A convenient Pet Taxi is available for pick up, and return of your dogs.</li>
                    <li>The taxi is available Monday to Saturday between the hours of 10am to 4pm.</li>
                    <li>Should you require the pet taxi service, please check the option “Pet Taxi Service” on the booking form.</li>
                    </ul>
                </div>

                <div class="bg-white bg-opacity-30 backdrop-filter backdrop-blur rounded-2xl p-6 border border-white border-opacity-20">
                    <h3 class="text-xl font-semibold text-emerald-700">Pet Relocation</h3>
                    <p class="mt-3 text-gray-800 leading-relaxed">Should you require this pet service, please contact us <a href="{{ url('/book-now') }}" target="_blank" class="underline here-redirect">HERE</a>.</p>
                </div>
            </div>

            <div class="mt-10 max-w-5xl mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <img src="/images/facilities/grooming.jpg" alt="Grooming"
                        class="w-full h-64 object-cover rounded-xl shadow">
                    <img src="/images/facilities/pets.jpg" alt="Pet Taxi"
                        class="w-full h-64 object-cover rounded-xl shadow">
                </div>
            </div>
        </div>
    </section>

    @include('partials.banner-background')

@endsection