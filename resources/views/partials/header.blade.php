{{-- Navbar --}}
<header>
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}">
            <img src="/images/logo-green.png" alt="Doghouse Broga" class="h-10">
        </a>
        <nav class="space-x-4 text-gray-600 font-semibold">
            <a href="{{ url('/') }}" class="green-nav-bar-button">Home</a>
            <a href="{{ route('book-now') }}" class="green-nav-bar-button">Book Now</a>
        </nav>
    </div>
</header>

<style>
    header {
      position: absolute;
      width: 100%;
      top: 0;
      left: 0;
      background-color: transparent !important;
      box-shadow: none !important;
      z-index: 30;
    }
</style>