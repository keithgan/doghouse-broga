@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div>
    {{-- HERO with smooth transitions --}}
    <x-hero-slider
        id="home-hero"
        :images="[
            '/images/home/home-1.jpg',
            '/images/home/home-2.jpg',
        ]"
        :interval="10000"
        :dots="true"
        :arrows="true"
    />

    {{-- WELCOME BAND --}}
    <section class="py-14 md:py-16 text-white" style="background-color:#355a5c;">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-2xl md:text-3xl font-semibold" style="color:#5dd3b0;">
                Welcome to Doghouse Broga
            </h2>
            <div class="mt-5 space-y-5 text-sm md:text-base leading-relaxed opacity-95">
                <p>
                Welcome to our retreat. Doghouse has been a passionate dream of ours for many years; planning every detail
                meticulously to ensure your dog receives the best treatment and care during its stay with us. You too can
                relax in the knowledge that our love for animals and our pride in the expertise we provide will ensure the
                best care for your pet.
                </p>
                <p>
                Our philosophy is based upon a combination of hygiene and the highest level of care but also about increasing
                the fun and interaction your pet has with other dogs.
                </p>
            </div>
        </div>
    </section>

    {{-- ABOUT / WHY / COMMITMENT TABS --}}
    <section class="bg-emerald-50 rounded-2xl shadow-md p-8 py-16"> {{-- whole section background --}}
        <div class="max-w-6xl mx-auto px-6">

            <!-- Tab Header -->
            <div class="relative">
            <!-- Pills -->
            <div id="about-tabs"
                class="flex space-x-4 overflow-x-auto md:overflow-visible no-scrollbar 
                        mx-auto max-w-5xl px-2 md:justify-center md:space-x-6">

                <!-- ABOUT -->
                <button type="button" data-tab="about"
                        class="tab-btn flex-shrink-0 inline-flex items-center gap-3 rounded-full
                            px-6 py-3 bg-white text-slate-600 border border-slate-200
                            shadow-sm hover:border-teal-400 hover:text-teal-700
                            transition font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 10l6-7 6 7M6 10h12M6 10l6 11 6-11"/>
                </svg>
                <span>ABOUT</span>
                </button>

                <!-- WHY BROGA -->
                <button type="button" data-tab="why"
                        class="tab-btn flex-shrink-0 inline-flex items-center gap-3 rounded-full
                            px-6 py-3 bg-white text-slate-600 border border-slate-200
                            shadow-sm hover:border-teal-400 hover:text-teal-700
                            transition font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.553-.832L9 7m0 13l6-3m-6 3V7m6 10l5.447 2.724A1 1 0 0021 18.382V7.618a1 1 0 00-1.553-.832L15 7m0 10V7m0 0L9 4"/>
                </svg>
                <span>WHY BROGA?</span>
                </button>

                <!-- OUR COMMITMENT -->
                <button type="button" data-tab="commitment"
                        class="tab-btn flex-shrink-0 inline-flex items-center gap-3 rounded-full
                            px-6 py-3 bg-white text-slate-600 border border-slate-200
                            shadow-sm hover:border-teal-400 hover:text-teal-700
                            transition font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-teal-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364 4.318 12.682a4.5 4.5 0 010-6.364z"/>
                </svg>
                <span>OUR COMMITMENT</span>
                </button>
            </div>

            <!-- Divider line -->
                <div class="my-4 transform -translate-y-1/2 h-px bg-emerald-100"></div>
            </div>

            {{-- Panels --}}
            <div class="mt-2">
            <!-- ABOUT -->
            <div class="tab-panel" data-panel="about">
                <div class="bg-white rounded-2xl shadow-md p-6 md:p-10">
                <div class="flex flex-col gap-6 md:gap-8">
                    <!-- Image first on mobile, second on desktop -->
                    <img src="/images/home/about.jpg" alt="About"
                        class="order-1 md:order-2 w-full aspect-[16/5] object-cover rounded-xl shadow-md md:aspect-auto">

                    <!-- Text second on mobile, first on desktop -->
                    <p class="order-2 md:order-1 text-gray-700 text-base sm:text-lg leading-relaxed">
                    Doghouse is a peaceful sanctuary, situated on the edge of a beautiful nature reserve, surrounded by
                    breathtaking, towering trees and a lush forest. A natural waterfall and stream flow through our property
                    making it a tranquil and picturesque home.
                    </p>
                </div>
                </div>
            </div>

            <!-- WHY BROGA -->
            <div class="tab-panel hidden" data-panel="why">
                <div class="bg-white rounded-2xl shadow-md p-6 md:p-10">
                <div class="flex flex-col gap-6 md:gap-8">
                    <img src="/images/home/broga.jpg" alt="Why Broga"
                        class="order-1 md:order-2 w-full aspect-[16/5] object-cover rounded-xl shadow-md md:aspect-auto">
                    <p class="order-2 md:order-1 text-gray-700 text-base sm:text-lg leading-relaxed">
                    We are located near the small Chinese village of Broga, approximately one hour south of Kuala Lumpur.
                    The journey itself allows you to unwind and enjoy the natural beauty of small farms and forest. You can
                    also utilise our Pet Taxi Service for pickup or return delivery of your best friend.
                    </p>
                </div>
                </div>
            </div>

            <!-- COMMITMENT -->
            <div class="tab-panel hidden" data-panel="commitment">
                <div class="bg-white rounded-2xl shadow-md p-6 md:p-10">
                <div class="flex flex-col gap-6 md:gap-8">
                    <img src="/images/home/commitment.jpg" alt="Our Commitment"
                        class="order-1 md:order-2 w-full aspect-[16/5] object-cover rounded-xl shadow-md md:aspect-auto">
                    <p class="order-2 md:order-1 text-gray-700 text-base sm:text-lg leading-relaxed">
                    We will ensure your pet feels at home while you are away. We love our pets greatly and will ensure we
                    treat each as though it was one of our own.
                    </p>
                </div>
                </div>
            </div>
            </div>

        </div>
    </section>

    {{-- DESCRIPTION BAND --}}
    <section class="relative text-white py-20" style="background-color: #355a5c">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl">
                {{-- Heading --}}
                <h2 class="text-2xl md:text-3xl font-light leading-snug">
                    An exceptional environment for your pet, <br>
                    to exercise and play in complete safety.
                </h2>

                {{-- Description --}}
                <p class="mt-4 text-sm md:text-base text-gray-200">
                    Doghouse Broga offers a safe, peaceful sanctuary for your dog when you are travelling,
                    moving house, or just need temporary accommodation for your pet.
                </p>

                {{-- Buttons --}}
                <div class="mt-6 flex space-x-4">
                    <a href="{{ route('facilities') }}"
                    class="px-4 py-2 border border-teal-400 text-teal-400 rounded-md hover:bg-teal-400 hover:text-white transition">
                    Facilities
                    </a>
                    <a href="{{ route('facilities') }}"
                    class="px-4 py-2 border border-teal-400 text-teal-400 rounded-md hover:bg-teal-400 hover:text-white transition">
                    Location
                    </a>
                    <a href="{{ route('book-now') }}"
                    class="px-4 py-2 border border-teal-400 text-teal-400 rounded-md hover:bg-teal-400 hover:text-white transition">
                    Book Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    {{-- STATIC TESTIMONIAL GRID (green gradient + quote badges) --}}
    <section class="relative overflow-hidden" style="background: linear-gradient(180deg, #19926e, #103d30);">
        <div class="max-w-6xl mx-auto px-6 py-16 md:py-20 text-white">
            <div class="max-w-3xl">
                <h2 class="text-2xl md:text-3xl font-semibold">What our guests’ humans say</h2>
                <p class="mt-2 text-teal-50">
                    Real notes from happy owners who stayed with Doghouse Broga.
                </p>
            </div>

            {{-- Carousel --}}
            <div class="mt-10 md:mt-12 swiper t-caro">
                <div class="swiper-wrapper">
                    
                    {{-- Slide 1 --}}
                    <div class="swiper-slide">
                    <figure class="relative max-w-3xl mx-auto">
                        <div class="absolute -top-3 -left-3 z-10 w-10 h-10 rounded-full bg-white bg-opacity-20 ring-2 ring-white ring-opacity-40
                                    flex items-center justify-center backdrop-filter backdrop-blur">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.17 6.17A4 4 0 0 1 9 9.58V14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a6 6 0 0 1 6-6v2c-.62 0-1.21.25-1.64.67zM15.17 6.17A4 4 0 0 1 17 9.58V14a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2V9a6 6 0 0 1 6-6v2c-.62 0-1.21.25-1.64.67z"/>
                        </svg>
                        </div>

                        <div class="relative bg-white bg-opacity-10 rounded-2xl p-6 md:p-7 backdrop-filter backdrop-blur">
                        <div class="flex items-center space-x-4">
                            <img src="/images/home/beagle.jpg" alt="Tracey Wardhaugh"
                                class="w-12 h-12 rounded-full object-cover ring-2 ring-white ring-opacity-40">
                            <div class="font-semibold">Tracey Wardhaugh</div>
                        </div>
                        <blockquote class="mt-4 text-base md:text-lg leading-relaxed italic">
                            “Great set up. Our dog lived in the lap of kennel luxury for 2 weeks. Such a superb place for dogs to
                            socialise and run around OFF THE LEAD too, something our dog misses very much since moving here.
                            I appreciated the updates on how our dog was doing from Stephanie too. He came back very happy and
                            looked after. Thank you.”
                        </blockquote>
                        </div>
                    </figure>
                    </div>

                    {{-- Slide 2 --}}
                    <div class="swiper-slide">
                    <figure class="relative max-w-3xl mx-auto isolate">
                        {{-- Quote badge --}}
                        <div class="absolute -top-3 -left-3 z-10 w-10 h-10 rounded-full bg-white bg-opacity-20 ring-2 ring-white ring-opacity-40
                        flex items-center justify-center backdrop-filter backdrop-blur">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.17 6.17A4 4 0 0 1 9 9.58V14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a6 6 0 0 1 6-6v2c-.62 0-1.21.25-1.64.67zM15.17 6.17A4 4 0 0 1 17 9.58V14a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2V9a6 6 0 0 1 6-6v2c-.62 0-1.21.25-1.64.67z"/>
                        </svg>
                        </div>

                        <div class="relative bg-white bg-opacity-10 rounded-2xl p-6 md:p-7 backdrop-filter backdrop-blur">
                        <div class="flex items-center space-x-4">
                            <img src="/images/home/golden.jpg" alt="Melissa K."
                                class="w-12 h-12 rounded-full object-cover ring-2 ring-white ring-opacity-40">
                            <div class="font-semibold">Pia Norby Frimann</div>
                        </div>
                        <blockquote class="mt-4 text-base md:text-lg leading-relaxed italic">
                            “I had my little Westie at Doghouse Broga for 5 days. I am so impressed she looked so well taken care
                            of and happy as we picked her up. The owners are such a lovely and caring couple, I think I could never
                            find a better place to send my little one for holiday. The place is amazing, in a scenario that I would
                            love to go for holiday myself. It is clean and beautiful, I give Doghouse Broga my highest recommendation.”
                        </blockquote>
                        </div>
                    </figure>
                    </div>

                    {{-- Slide 3 --}}
                    <div class="swiper-slide">
                    <figure class="relative max-w-3xl mx-auto">
                        <div class="absolute -top-3 -left-3 z-10 w-10 h-10 rounded-full bg-white bg-opacity-20 ring-2 ring-white ring-opacity-40
                                    flex items-center justify-center backdrop-filter backdrop-blur">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M7.17 6.17A4 4 0 0 1 9 9.58V14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9a6 6 0 0 1 6-6v2c-.62 0-1.21.25-1.64.67zM15.17 6.17A4 4 0 0 1 17 9.58V14a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2V9a6 6 0 0 1 6-6v2c-.62 0-1.21.25-1.64.67z"/>
                        </svg>
                        </div>

                        <div class="relative bg-white bg-opacity-10 rounded-2xl p-6 md:p-7 backdrop-filter backdrop-blur">
                        <div class="flex items-center space-x-4">
                            <img src="/images/home/husky.jpg" alt="Pornchan Napawongse Na Ayuthaya"
                                class="w-12 h-12 rounded-full object-cover ring-2 ring-white ring-opacity-40">
                            <div class="font-semibold">Pornchan Napawongse Na Ayuthaya</div>
                        </div>
                        <blockquote class="mt-4 text-base md:text-lg leading-relaxed italic">
                            “Oh my goodness, I’d never imagine such a place could exist! Nicer than many hotels we have stayed in,
                            lucky girl!” … was a reply I received re Doghousebroga.<br><br>
                            So true!! Service, not just to their customers but to their customers' owners and friendliness …
                            second to none in the business.
                        </blockquote>
                        </div>
                    </figure>
                    </div>
                </div>

                {{-- Dots + Arrows --}}
                <div class="swiper-pagination mt-6"></div>
                <div class="swiper-button-prev text-white"></div>
                <div class="swiper-button-next text-white"></div>
            </div>
        </div>
    </section>

    {{-- Banner Background --}}
    @include('partials.banner-background')
    
    <script>
        // --- Tabs --- //
        (function () {
        var root = document.getElementById('about-tabs');
        if (!root) return;

        var btns = [].slice.call(root.querySelectorAll('.tab-btn'));
        var panels = [].slice.call(document.querySelectorAll('.tab-panel'));

        function activate(name) {
            // buttons
            btns.forEach(function (b) {
            var on = b.getAttribute('data-tab') === name;
            b.classList.toggle('text-teal-700', on);
            b.classList.toggle('border-teal-500', on);
            b.classList.toggle('bg-white', true);
            b.classList.toggle('font-semibold', on);
            });
            // panels
            panels.forEach(function (p) {
            var show = p.getAttribute('data-panel') === name;
            p.classList.toggle('hidden', !show);
            });
            // hash (optional deep-link)
            if (history.replaceState) {
            history.replaceState(null, '', '#' + name);
            } else {
            location.hash = name;
            }
        }

        // click handlers
        btns.forEach(function (b) {
            b.addEventListener('click', function () {
            activate(b.getAttribute('data-tab'));
            });
        });

        // init from hash or default to "about"
        var initial = (location.hash || '').replace('#', '') || 'about';
        var valid = btns.some(function (b) { return b.getAttribute('data-tab') === initial; });
        activate(valid ? initial : 'about');
        })();

        // --- Testimonials carousel (Swiper) --- //
        new Swiper('.t-caro', {
            loop: true,
            autoHeight: true,           // adjusts height to each testimonial
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 24,
            autoplay: { delay: 10000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
        });
    </script>
</div>

@endsection

<style>
  @media (max-width: 768px) {
    .hide-on-mobile {
      display: none !important;
    }
  }

    /* Allow content to extend outside slides for this carousel only */
  .t-caro.swiper { overflow: visible; }
  .t-caro .swiper-wrapper { overflow: visible; }
  .t-caro .swiper-slide { overflow: visible; }

</style>


