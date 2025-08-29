{{-- ===== Sticky header with mobile drawer ===== --}}
<header id="site-header"
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300
               bg-transparent md:bg-transparent">
  <div class="container mx-auto px-6 h-16 flex items-center justify-between">

    {{-- Logo --}}
    <a href="{{ url('/') }}" class="shrink-0">
      <img src="/images/logo-green.png" alt="Doghouse Broga" class="h-10">
    </a>

    {{-- Desktop nav --}}
    <nav class="hidden md:flex items-center gap-6 text-white font-semibold">
      <a href="{{ route('home') }}"        class="green-nav-bar-button">Home</a>
      <a href="{{ route('facilities') }}"  class="green-nav-bar-button">Facilities</a>
      <a href="{{ route('book-now') }}"    class="green-nav-bar-button">Book Now</a>
      <a href="{{ route('facilities') }}"        class="green-nav-bar-button">FAQs</a>
    </nav>

    {{-- Mobile: hamburger --}}
    <button type="button" id="nav-open"
            class="md:hidden inline-flex items-center justify-center w-10 h-10 rounded-md
                   text-white/90 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-400"
            aria-controls="mobile-drawer" aria-expanded="false" aria-label="Open menu">
      {{-- burger icon --}}
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
      </svg>
    </button>
  </div>

  {{-- gradient behind header text over bright hero images --}}
  <div class="pointer-events-none absolute inset-x-0 top-0 h-16"
       style="background:linear-gradient(to bottom, rgba(0,0,0,.45), rgba(0,0,0,0));"></div>
</header>

{{-- ===== mobile slide-over ===== --}}
<div id="mobile-overlay"
     class="fixed inset-0 z-40 bg-black/40 opacity-0 pointer-events-none transition-opacity duration-300 md:hidden"></div>

<aside id="mobile-drawer"
       class="fixed right-0 top-0 z-50 h-full w-[78%] max-w-sm translate-x-full md:hidden
              bg-white shadow-xl transition-transform duration-300 will-change-transform"
       aria-hidden="true" aria-labelledby="nav-open">

  <div class="flex items-center justify-between px-5 h-16 border-b">
    <span class="font-semibold text-slate-700">Menu</span>
    <button id="nav-close" class="p-2 rounded-full text-slate-600 hover:bg-slate-100"
            aria-label="Close menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/>
      </svg>
    </button>
  </div>

  <nav class="px-5 py-4 space-y-2 text-slate-700">
    <a href="{{ route('home') }}"        class="block rounded-lg px-3 py-3 hover:bg-slate-100">Home</a>
    <a href="{{ route('facilities') }}"  class="block rounded-lg px-3 py-3 hover:bg-slate-100">Facilities</a>
    <a href="{{ route('book-now') }}"    class="block rounded-lg px-3 py-3 hover:bg-slate-100">Book Now</a>
    <a href="{{ route('facilities') }}"        class="block rounded-lg px-3 py-3 hover:bg-slate-100">FAQs</a>
  </nav>
</aside>

<style>
  /* Optional: when header becomes “stuck” */
  #site-header.is-stuck { backdrop-filter: blur(6px); background: rgba(17,24,39,.35); }
  #site-header.hidden  { transform: translateY(-100%); }
  #site-header.revealed{ transform: translateY(0); }
</style>

<script>
(function () {
  var header   = document.getElementById('site-header');
  var openBtn  = document.getElementById('nav-open');
  var closeBtn = document.getElementById('nav-close');
  var drawer   = document.getElementById('mobile-drawer');
  var overlay  = document.getElementById('mobile-overlay');

  // stick / reveal (keeps your existing behaviour)
  var lastY = window.scrollY || 0, threshold = 80;
  function onScroll() {
    var y = window.scrollY || 0;
    header.classList.toggle('is-stuck', y > threshold);
    if (y > lastY && y > threshold + 20) {
      header.classList.remove('revealed'); header.classList.add('hidden');
    } else {
      header.classList.remove('hidden'); header.classList.add('revealed');
    }
    lastY = y;
  }
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  // mobile drawer helpers
  function lockBody(lock) {
    document.documentElement.classList.toggle('overflow-hidden', lock);
    document.body.classList.toggle('overflow-hidden', lock);
  }
  function open() {
    drawer.style.transform  = 'translateX(0)';
    overlay.classList.remove('pointer-events-none');
    overlay.classList.add('opacity-100');
    openBtn.setAttribute('aria-expanded', 'true');
    drawer.setAttribute('aria-hidden', 'false');
    lockBody(true);
  }
  function close() {
    drawer.style.transform  = 'translateX(100%)';
    overlay.classList.add('pointer-events-none');
    overlay.classList.remove('opacity-100');
    openBtn.setAttribute('aria-expanded', 'false');
    drawer.setAttribute('aria-hidden', 'true');
    lockBody(false);
  }

  openBtn && openBtn.addEventListener('click', open);
  closeBtn && closeBtn.addEventListener('click', close);
  overlay  && overlay.addEventListener('click', close);
  // close on ESC
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });
})();
</script>
