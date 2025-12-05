@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
<div class="relative flex flex-col items-center justify-center min-h-screen py-20 px-4 text-center bg-white" >
  
  <div class="relative z-10 flex flex-col items-center">
    <i class="fas fa-exclamation-triangle text-6xl mb-6" style="color: #35e7c5;"></i>
    <h1 class="text-8xl light-green-text mb-4">419</h1>
    <h3 class="text-3xl text-gray-400 max-w-xl mb-4">Session expired!</h2>
    <p class="text-lg text-gray-400 max-w-xl mb-6">
        Your form was open for too long or the page was left idle. Please refresh the page and submit the form again.
    </p>

    <a href="/book-now" class="inline-block light-green-button text-white font-semibold py-3 px-6 rounded-lg shadow-md transition">
        Return to Booking Form
    </a>
  </div>
</div>
@endsection
