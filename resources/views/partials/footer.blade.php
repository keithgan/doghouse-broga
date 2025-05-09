<footer class="bg-[#2a2c2c] text-gray-300 text-sm py-4 text-center relative">
    <div class="container mx-auto px-4">
        © {{ date('Y') }} Broga Doghouse. All Rights Reserved.
    </div>
    <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
        <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' });" class="fade-out-button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hover:text-white transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>
        </button>
    </div>
</footer>


<style>
    footer {
        position: relative;
        bottom: 0;
        width: 100%;
        background-image: repeating-linear-gradient(45deg, #2a2c2c 0, #2a2c2c 1px, #262828 1px, #262828 5px);
    }

    .fade-out-button {
        transition: opacity 0.3s ease;
    }

    .fade-out-button:hover {
        opacity: 0.2;
    }
</style>
