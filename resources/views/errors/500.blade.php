@extends('layouts.app')

@section('title', 'Server Error')

@section('content')
<div class="relative flex flex-col items-center justify-center min-h-screen py-20 px-4 text-center bg-white">

  <div class="relative z-10 flex flex-col items-center">
    <i class="fas fa-exclamation-triangle text-6xl mb-6" style="color: #35e7c5;"></i>

    <h1 class="text-8xl light-green-text mb-4">500</h1>

    <h3 class="text-3xl text-gray-400 max-w-xl mb-4">
      Something went wrong
    </h3>

    <p class="text-lg text-gray-400 max-w-xl mb-6">
      The server encountered an unexpected issue and couldn’t process your request.
      This isn’t a problem with your input — please try again shortly.
    </p>

    <a href="{{ url('/') }}"
       class="inline-block light-green-button text-white font-semibold py-3 px-6 rounded-lg shadow-md transition">
        Go to Home Page
    </a>
  </div>

</div>
@endsection
