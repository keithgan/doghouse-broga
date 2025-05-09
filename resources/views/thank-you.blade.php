@extends('layouts.app')

@section('title', 'Thank You')

@section('content')

<div class="relative flex flex-col items-center justify-center min-h-screen py-20 px-4 text-center bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/thank-you-page-background.png') }}');">

  <div class="absolute inset-0 bg-black bg-opacity-60 z-0"></div>

  <div class="relative z-10 flex flex-col items-center">

    <img src="https://img.icons8.com/emoji/96/dog-emoji.png" alt="Dog Paw" class="mb-6 relative z-10">

    <h1 class="text-4xl font-bold text-white mb-4">Thank You for Booking with Us!</h1>

    <p class="text-lg text-white max-w-xl mb-6">
        Your pup’s vacation is almost here! We've received your booking and will be in touch soon to confirm the details. If you have any questions, just give us a bark!
    </p>

    <a href="/" class="inline-block green-button text-white font-semibold py-3 px-6 rounded-lg transition">
        Back to Homepage
    </a>

  </div>

</div>

@endsection

