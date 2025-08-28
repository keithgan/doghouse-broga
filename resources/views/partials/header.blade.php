{{-- Navbar --}}
<header id="site-header" class="backdrop-filter backdrop-blur shadow-md">
  <div class="container mx-auto px-6 py-4 flex justify-between items-center">
    <a href="{{ url('/') }}">
      <img src="/images/logo-green.png" alt="Doghouse Broga" class="h-10">
    </a>
    <nav class="space-x-4 text-white font-semibold">
      <a href="{{ route('home') }}" class="green-nav-bar-button">Home</a>
      <a href="{{ route('facilities') }}" class="green-nav-bar-button">Facilities</a>
      <a href="{{ route('book-now') }}" class="green-nav-bar-button">Book Now</a>
      <a href="{{ route('faqs') }}" class="green-nav-bar-button">FAQs</a>
    </nav>
  </div>
</header>

<script>
(function () {
  var header = document.getElementById('site-header');
  var lastY = window.scrollY || 0;
  var threshold = 80; // when to “stick”

  function onScroll() {
    var y = window.scrollY || 0;

    // Stick after threshold
    if (y > threshold) {
      header.classList.add('is-stuck');
    } else {
      header.classList.remove('is-stuck');
    }

    // (Optional) hide on scroll down, show on scroll up
    if (y > lastY && y > threshold + 20) {
      header.classList.remove('revealed');
      header.classList.add('hidden');
    } else {
      header.classList.remove('hidden');
      header.classList.add('revealed');
    }

    lastY = y;
  }

  // initial state + listeners
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
})();
</script>