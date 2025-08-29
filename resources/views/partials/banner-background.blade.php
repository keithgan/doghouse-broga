<section class="relative bg-cover bg-center text-white" style="background-image:url('/images/backgrounds/broga-hill.jpg')">
  <!-- Optional dim overlay for readability -->
  <div class="absolute inset-0 bg-black/30"></div>

  <div class="relative max-w-4xl mx-auto px-10 py-16">
    <!-- Mobile: column with space-between so the button sits at the bottom
         Desktop (md+): original row layout -->
    <div class="flex flex-col justify-between min-h-[50vh] md:min-h-0 md:flex-row md:items-start">
      
      <!-- Text -->
      <div class="w-full md:w-3/4 text-left">
        <h3 class="text-xl md:text-2xl font-light leading-tight py-2">
          A tranquil retreat for your pet in Broga
        </h3>

        <!-- green underline -->
        <div class="mt-2 h-1 w-40 md:w-80 bg-emerald-300"></div>

        <p class="mt-4 text-lg md:text-xl text-red-400">
          The ultimate pet resort!
        </p>

        <p class="mt-3 md:mt-4 text-md md:text-lg">
          Surrounded by breathtaking, towering trees and a lush forest of Broga town,
          The Doghouse is a peaceful sanctuary, situated on the edge of this beautiful nature reserve.
        </p>
      </div>

      <!-- Button -->
      <div class="w-full md:w-1/4 mt-8 md:mt-0 md:ml-8 self-stretch md:self-start">
        <a href="{{ route('book-now') }}" class="block w-full md:w-auto text-center bg-emerald-400 hover:bg-green-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg">
          BOOK NOW
        </a>
      </div>
    </div>
  </div>
</section>
