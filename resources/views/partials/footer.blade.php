<footer class="bg-gray-900 text-gray-300 py-12 relative">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">
        <!-- Logo & About -->
        <div>
        <a href="{{ url('/') }}">
            <img class="py-2" src="/images/logo-green.png" alt="Doghouse Broga" class="h-10">
        </a>
        <p class="text-sm leading-relaxed">
            Doghouse is a peaceful Boutique Hotel for pet Dogs, situated on the edge of a beautiful
            nature reserve, surrounded by breathtaking, towering trees and a lush forest.
        </p>
        </div>

        <!-- Quick Links -->
        <div>
        <h3 class="text-lg font-semibold text-emerald-400 mb-4">Quick Links</h3>
        <ul class="space-y-2">
            <li><a href="/" class="hover:text-emerald-300 transition">Home</a></li>
            <li><a href="/privacy-policy" class="hover:text-emerald-300 transition">Privacy Policy</a></li>
            <li><a href="/terms-of-service" class="hover:text-emerald-300 transition">Terms of Service</a></li>
            <li><a href="/terms-conditions" class="hover:text-emerald-300 transition">Terms & Conditions</a></li>
        </ul>
        </div>

        <!-- Services -->
        <div>
        <h3 class="text-lg font-semibold text-emerald-400 mb-4">Our Services</h3>
        <ul class="space-y-2">
            <li><a href="/boarding" class="hover:text-emerald-300 transition">Boarding</a></li>
            <li><a href="/training" class="hover:text-emerald-300 transition">Training</a></li>
            <li><a href="/spa" class="hover:text-emerald-300 transition">Dog Spa</a></li>
            <li><a href="/pool" class="hover:text-emerald-300 transition">Swimming Pool</a></li>
        </ul>
        </div>

        <!-- Social Links -->
        <div>
            @php
                $currentUrl = url()->current();
            @endphp

            <h3 class="text-lg font-semibold text-emerald-400 mb-4">Share this</h3>
            <div class="flex space-x-3">
                <!-- Facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $currentUrl }}" target="_blank" rel="noopener noreferrer"
                class="bg-blue-600 hover:bg-blue-700 text-white w-10 h-10 flex items-center justify-center rounded">
                <i class="fab fa-facebook-f"></i>
                </a>

                <!-- Twitter -->
                <a href="https://twitter.com/intent/tweet?url={{ $currentUrl }}&text=Check+this+out!"target="_blank" rel="noopener noreferrer"
                class="bg-sky-500 hover:bg-sky-600 text-white w-10 h-10 flex items-center justify-center rounded">
                <i class="fab fa-twitter"></i>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $currentUrl }}" target="_blank" rel="noopener noreferrer"
                class="bg-blue-700 hover:bg-blue-800 text-white w-10 h-10 flex items-center justify-center rounded">
                <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <h3 class="text-lg font-semibold text-emerald-400 my-4">Connect with us</h3>
            <div class="flex space-x-3">
                <!-- Facebook -->
                <a href="https://www.facebook.com/doghousebroga" target="_blank" rel="noopener noreferrer"
                class="bg-blue-600 hover:bg-blue-700 text-white w-10 h-10 flex items-center justify-center rounded">
                <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom Bar with Scroll to Top -->
    <div class="border-t border-gray-700 mt-10 pt-6 grid grid-cols-3 items-center text-sm text-gray-300">
        <span class="col-start-2 text-center">© {{ date('Y') }} Doghouse Broga. All rights reserved.</span>
        <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' });" class="justify-self-end p-2 rounded-full hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hover:text-white transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                </svg>
        </button>
    </div>
</footer>