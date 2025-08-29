@props([
    // Required: array of image urls
    'images' => [
        '/images/home/home-1.jpg',
        '/images/home/home-2.jpg',
    ],

    // Optional: unique id if you place multiple sliders on a page
    'id' => 'hero',

    // Optional: CSS height value
    'height' => '70vh',

    // Optional: autoplay interval in ms
    'interval' => 10000,

    // Optional: show dots & arrows
    'dots' => true,
    'arrows' => true,
    
])

<section id="{{ $id }}" class="relative w-full overflow-hidden group" style="height:{{ $height }};min-height:520px;">
    <div class="absolute inset-0" data-track>
        @foreach ($images as $index => $src)
        <figure class="hero-slide {{ $index === 0 ? 'is-active' : '' }}">
            <img src="{{ $src }}" alt="Slide {{ $index + 1 }}">
        </figure>
        @endforeach
    </div>

    @if($arrows)
        <button type="button" class="hero-arrow left" aria-label="Previous" data-prev>‹</button>
        <button type="button" class="hero-arrow right" aria-label="Next" data-next>›</button>
    @endif

    @if($dots)
        <div class="absolute bottom-4 inset-x-0 flex justify-center space-x-2 z-20" data-dots></div>
    @endif

    {{-- top gradient (keeps any header readable over bright images) --}}
    <div class="pointer-events-none absolute inset-x-0 top-0 h-24 z-10"
        style="background:linear-gradient(to bottom, rgba(0,0,0,.45), rgba(0,0,0,0));"></div>

    <style>
        #{{ $id }} [data-track]{position:absolute; inset:0;}
        #{{ $id }} .hero-slide{position:absolute; inset:0; opacity:0; transform:translateX(40px);
                            transition:opacity .8s ease, transform .8s ease;}
        #{{ $id }} .hero-slide.is-active{opacity:1; transform:translateX(0); z-index:2;}
        #{{ $id }} .hero-slide img{width:100%; height:100%; object-fit:cover;}

        #{{ $id }} .hero-arrow{position:absolute; top:50%; transform:translateY(-50%);
                            width:44px; height:44px; border-radius:9999px; display:flex;
                            align-items:center; justify-content:center; background:rgba(0,0,0,.4);
                            color:#fff; z-index:20; transition:background .25s ease, transform .25s ease;}
        #{{ $id }} .hero-arrow:hover{background:rgba(0,0,0,.6); transform:translateY(-50%) scale(1.05);}
        #{{ $id }} .hero-arrow.left{left:12px;}
        #{{ $id }} .hero-arrow.right{right:12px;}

        #{{ $id }} .hero-dot{width:9px; height:9px; border-radius:9999px; background:rgba(255,255,255,.5);
                            transition:transform .25s ease, background .25s ease;}
        #{{ $id }} .hero-dot.is-active{background:#fff; transform:scale(1.15);}

        /* Phones (≤ 640px): shorter, smaller arrows/dots */
        @media (max-width: 640px) {
            #{{ $id }} {
                height: 30vh !important; 
                min-height: 260px !important; 
            }
            #{{ $id }} .hero-arrow { width: 34px; height: 34px; }
            #{{ $id }} .hero-arrow.left  { left: 8px; }
            #{{ $id }} .hero-arrow.right { right: 8px; }
            #{{ $id }} [data-dots] { bottom: 10px; }
            #{{ $id }} .pointer-events-none.top-gradient { height: 56px; } /* optional */
        }

        /* Tablets / iPads portrait (641px–1024px): medium height */
        @media (min-width: 641px) and (max-width: 1024px) {
            #{{ $id }} {
                height: 42vh !important; 
                min-height: 380px !important; 
            }
            #{{ $id }} .hero-arrow { width: 40px; height: 40px; }
            #{{ $id }} .hero-arrow.left  { left: 12px; }
            #{{ $id }} .hero-arrow.right { right: 12px; }
        }

        /* iPad / small laptops landscape (you can tweak the range if needed) */
        @media (min-width: 1024px) and (max-width: 1180px) and (orientation: landscape) {
            #{{ $id }} {
                height: 60vh !important;
                min-height: 420px !important;
            }
        }

        /* Desktop (default): uses the prop you passed, e.g., 70vh */
        @media (min-width: 1181px) {
            #{{ $id }} {
                height: 70vh !important;
                min-height: 520px !important; 
            }
        }
        @media (prefers-reduced-motion: reduce){
            #{{ $id }} .hero-slide{ transition:none !important; }
        }
    </style>

    <script>
        (function () {
        var root = document.getElementById(@json($id));
        if (!root) return;

        var track = root.querySelector('[data-track]');
        var slides = Array.prototype.slice.call(track.querySelectorAll('.hero-slide'));
        if (!slides.length) return;

        var dotsWrap = root.querySelector('[data-dots]');
        var btnPrev = root.querySelector('[data-prev]');
        var btnNext = root.querySelector('[data-next]');
        var i = 0, timer = null, autoplay = {{ (int) $interval }};

        // Build dots if container exists
        if (dotsWrap) {
            slides.forEach(function(_, idx){
            var b = document.createElement('button');
            b.type = 'button';
            b.className = 'hero-dot';
            b.setAttribute('aria-label', 'Go to slide ' + (idx + 1));
            b.addEventListener('click', function(){ goTo(idx); });
            dotsWrap.appendChild(b);
            });
        }

        function setActive(n){
            slides.forEach(function(s, idx){ s.classList.toggle('is-active', idx === n); });
            if (dotsWrap) {
            [].slice.call(dotsWrap.children).forEach(function(d, idx){
                d.classList.toggle('is-active', idx === n);
            });
            }
        }

        function go(delta){ goTo((i + delta + slides.length) % slides.length); }
        function goTo(n){ i = n; setActive(i); reset(); }

        function reset(){
            if (timer) clearInterval(timer);
            if (autoplay > 0) timer = setInterval(function(){ go(1); }, autoplay);
        }

        // arrows
        if (btnPrev) btnPrev.addEventListener('click', function(){ go(-1); });
        if (btnNext) btnNext.addEventListener('click', function(){ go(1); });

        // pause on hover
        root.addEventListener('mouseenter', function(){ if (timer) clearInterval(timer); });
        root.addEventListener('mouseleave', function(){ reset(); });

        // swipe
        var sx = 0, dx = 0;
        track.addEventListener('touchstart', function(e){ sx = e.touches[0].clientX; dx = 0; }, {passive:true});
        track.addEventListener('touchmove',  function(e){ dx = e.touches[0].clientX - sx; }, {passive:true});
        track.addEventListener('touchend',   function(){ if (Math.abs(dx) > 40) go(dx < 0 ? 1 : -1); });

        // init
        setActive(i); reset();
        })();
    </script>
</section>