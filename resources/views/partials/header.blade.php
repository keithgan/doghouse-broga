{{-- Navbar --}}
<header>
    <div class="container mx-auto px-6 py-4 flex justify-between items-center header-hero">
        <a href="{{ url('/') }}">
            <img src="/images/logo-green.png" alt="Doghouse Broga" class="h-10">
        </a>
        <nav class="space-x-4 text-gray-600 font-semibold">
            <a href="{{ route('home') }}" class="green-nav-bar-button">Home</a>
            <a href="{{ route('facilities') }}" class="green-nav-bar-button">Facilities</a>
            <a href="{{ route('book-now') }}" class="green-nav-bar-button">Book Now</a>
            <a href="{{ route('faqs') }}" class="green-nav-bar-button">FAQs</a>
        </nav>
    </div>
</header>

<style>
    header {
      position: absolute;
      width: 100%;
      top: 0;
      left: 0;
      background-color: white !important;
      box-shadow: none !important;
      z-index: 30;
    }
</style>