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
				<ul class="mt-4 list-disc list-inside space-y-2 text-slate-700">
					<li>6 dog villas: 4 units of 12’x8’, 2 units of 8’x4’</li>
					<li>Sharing basis depending on breed size</li>
					<li>Ceiling fans, mosquito netting, great ventilation</li>
					<li>Private deck, courtyard and play area</li>
					<li>Bedding and toys provided</li>
					<li>Cleaned twice daily for hygiene</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Play Areas -->
	<section class="py-16" style="background-color: #65866D">
		<div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
			<div>
				<h2 class="text-2xl font-semibold">Outdoor & Indoor Play Areas</h2>
				<ul class="mt-4 list-disc list-inside space-y-2 text-slate-700">
					<li>Daily group play sessions on a large open field</li>
					<li>Supervised games for socialising with people and other dogs</li>
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
					*Additional rates applied on the water play session. Please refer to the section entitled “Our Rates” <a href="{{ url('/book-now') }}" target="_blank" class="book-now-here underline hover:text-indigo-800">HERE</a>
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
				<ul class="mt-4 list-disc list-inside space-y-2 text-slate-700">
					<li>Staff with 18+ years of experience</li>
					<li>On-site 24/7 supervision</li>
				</ul>
			</div>
		</div>
	</section>

	<!-- Services -->
	<section class="py-16 bg-emerald-100">
		<div class="max-w-7xl mx-auto px-4">
			<h2 class="text-3xl font-light text-center text-emerald-800">Services</h2>

			<div class="mt-10 grid md:grid-cols-2 gap-10">
				<div>
					<h3 class="text-xl font-semibold text-emerald-700">Grooming Services</h3>
					<ul class="mt-2 list-disc list-inside text-slate-700">
						<li>Full professional grooming available (rates vary by breed/condition)</li>
						<li>All dogs receive a complimentary bath before departure</li>
					</ul>
				</div>

				<div>
					<h3 class="text-xl font-semibold text-emerald-700">Pet Taxi</h3>
					<ul class="mt-2 list-disc list-inside text-slate-700">
						<li>Convenient pick-up & return (Mon–Sat, 10am–4pm)</li>
						<li>Book via the form by selecting “Pet Taxi Service”</li>
					</ul>
				</div>

				<div>
					<h3 class="text-xl font-semibold text-emerald-700">Pet Relocation</h3>
					<p class="mt-2 text-slate-700">Contact us for relocation services.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- CTA -->
	<section class="relative bg-cover bg-center text-white" style="background-image:url('/images/backgrounds/broga-hill.jpg')">
		<div class="max-w-4xl mx-auto px-4 py-16">
			<div class="flex md:items-start">
				<div class="w-3/4 text-left">
					<h3 class="text-xl md:text-2xl font-light leading-tight py-2">
					A tranquil retreat for your pet in Broga
					</h3>
					<!-- green underline -->
					<div class="mt-2 h-1 w-80 bg-emerald-300"></div>

					<p class="mt-4 text-lg md:text-xl text-red-400">
					The ultimate pet resort!
					</p>
					<p class="mt-3 md:mt-4 text-md">
					Surrounded by breathtaking, towering trees and a lush forest of Broga town,
					The Doghouse is a peaceful sanctuary, situated on the edge of this beautiful nature reserve.
					</p>
				</div>
				<div class="w-1/4 mt-6 md:mt-0 md:ml-8 self-start">
					<a href="{{ route('book-now') }}"
					class="inline-block bg-emerald-400 hover:bg-green-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg">
					BOOK NOW
					</a>
				</div>
			</div>
		</div>
	</section>
@endsection
