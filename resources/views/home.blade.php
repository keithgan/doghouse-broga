@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div 
    x-data="{
        activeSlide: 0,
        slides: ['home-1.jpg', 'home-2.jpg'],
        interval: null,
        init() {
            this.startAutoplay();
            this.initSwipe();
        },
        startAutoplay() {
            this.interval = setInterval(() => this.next(), 5000);
        },
        stopAutoplay() {
            clearInterval(this.interval);
        },
        next() {
            this.activeSlide = (this.activeSlide + 1) % this.slides.length;
        },
        prev() {
            this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length;
        },
        initSwipe() {
            let touchStartX = 0;
            let touchEndX = 0;
            const el = $el;

            el.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            });

            el.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                if (touchEndX < touchStartX - 50) this.next();     // swipe left
                if (touchEndX > touchStartX + 50) this.prev();     // swipe right
            });
        }
    }" 
    @mouseenter="stopAutoplay()" 
    @mouseleave="startAutoplay()" 
    class="relative w-full min-h-screen overflow-auto flex flex-col">

    <!-- Slides with fade transition -->
    <template x-for="(slide, index) in slides" :key="index">
        <div
            x-show="activeSlide === index"
            x-transition:enter="transition-opacity duration-1000"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-1000"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-cover bg-center"
            :style="`background-image: url('{{ asset("images/${slide}") }}')`">
        </div>
    </template>

    <!-- Content Overlay -->
    <div class="relative z-10 min-h-screen flex flex-col justify-center items-center text-center px-4 py-16 md:py-32 bg-black bg-opacity-50">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight drop-shadow-lg">
            We’re Revamping Our Website!
        </h1>
        <p class="text-white text-base md:text-xl mb-8 max-w-2xl drop-shadow-md">
            Thank you for visiting Doghouse Broga. Our website is currently undergoing exciting updates.
            But don’t worry — you can still book your stay with us below!
        </p>
        <a href="{{ route('book-now') }}" 
           class="inline-block green-button text-white font-bold py-3 md:py-4 px-8 md:px-10 rounded-lg text-lg md:text-xl transition drop-shadow">
            Proceed to Book Now
        </a>
    </div>

    <!-- Arrow Buttons -->
    <button @click="prev"
        class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 bg-white bg-opacity-30 hover:bg-opacity-50 text-white p-2 rounded-full">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button @click="next"
        class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 bg-white bg-opacity-30 hover:bg-opacity-50 text-white p-2 rounded-full">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Dots -->
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="activeSlide = index"
                    class="w-3 h-3 rounded-full"
                    :class="activeSlide === index ? 'bg-white' : 'bg-gray-400'"></button>
        </template>
    </div>
</div>
@endsection



