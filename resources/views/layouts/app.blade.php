<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doghouse Broga - @yield('title', 'Book Now')</title>

    {{-- TailwindCSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    {{-- Google Fonts: Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Directly linked compiled CSS --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-DZ4hKiyi.css') }}">

    {{-- Alpine.js for Interactivity --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- Font Awesome for Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    @stack('styles') {{-- For page-specific styles if needed --}}
</head>
<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">
    @include('partials.header')

    {{-- Page Content --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts') {{-- For page-specific scripts if needed --}}

    {{-- Directly linked compiled JS --}}
    <script type="module" src="{{ asset('build/assets/app-DMSGCFVA.js') }}"></script>
</body>
</html>
