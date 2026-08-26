<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./output.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-family: "Outfit", sans-serif;
        }

        body {
            margin: 0;
            background: #fff;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        /* Utility helpers not easily expressible in CDN config */
        .font-display {
            font-family: "Dancing Script", cursive;
        }

        .text-hero {
            font-size: clamp(4.5rem, 11vw, 9rem);
        }

        .text-top-dest {
            font-size: clamp(3rem, 6vw, 5.5rem);
        }

        /* Gold arc behind hero */
        .gold-arc {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .gold-arc svg {
            position: absolute;
            top: -5%;
            right: 12%;
            width: 55%;
            height: 110%;
        }

        /* Cloud puff */
        .cloud {
            background: rgba(255, 255, 255, 0.88);
            border-radius: 9999px;
            filter: blur(3px);
        }

        /* Search bar sits at bottom of hero */
        .search-bar {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 680px;
            padding: 0 1rem;
            z-index: 20;
        }

        /* Promo banner cloud row */
        .promo-clouds {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            gap: 4px;
            pointer-events: none;
            overflow: hidden;
        }

        .promo-clouds span {
            display: block;
            width: 64px;
            height: 32px;
            background: rgba(255, 255, 255, 0.25);
            border-radius: 9999px;
            margin-bottom: -12px;
            flex-shrink: 0;
        }

        /* Destination card hover */
        .dest-card img {
            transition: transform 0.5s;
        }

        .dest-card:hover img {
            transform: scale(1.06);
        }

        /* Tour card hover */
        .tour-card img {
            transition: transform 0.5s;
        }

        .tour-card:hover img {
            transform: scale(1.06);
        }

        /* Back-to-top */
        #back-top {
            display: none;
        }

        /* Responsive tweaks */
        @media (max-width: 640px) {
            .hero-text-wrap {
                padding-bottom: 220px;
            }
        }
    </style>
</head>

<body class="font-body">
    <x-frontend.navbar />
    <!-- HEADER END -->

    <x-frontend.hero/>

    <!-- ═══════════════════════════════════════
     EASY STEPS FOR BOOKINGS
═══════════════════════════════════════ -->
   <x-frontend.booking-process/>

    <!-- ═══════════════════════════════════════
     TOP DESTINATIONS
═══════════════════════════════════════ -->
    <x-frontend.top-destination/>

    <!-- ═══════════════════════════════════════
     WE RECOMMEND BEAUTIFUL DESTINATIONS
    ═══════════════════════════════════════ -->
    <x-frontend.recommended-section/>

    <!-- ═══════════════════════════════════════
     CULTURAL TOURS
═══════════════════════════════════════ -->
    <x-frontend.cultural-tour-section/>

    <!-- ═══════════════════════════════════════
     TOUR CATEGORIES BANNER
═══════════════════════════════════════ -->
    <x-frontend.tour-categories-banner/>

    <!-- ═══════════════════════════════════════
     MEET WITH TOUR GUIDE
═══════════════════════════════════════ -->
    <x-frontend.tour-guide-section/>

    <!-- ═══════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════ -->
    <x-frontend.testominal-section/>
    <!-- ═══════════════════════════════════════
     FOOTER
═══════════════════════════════════════ -->
    <x-frontend.footer/>

    <!-- Back to top -->
    <button id="back-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-6 right-6 bg-teal-700 hover:bg-teal-900 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg transition-all hover:scale-110 z-50">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
        </svg>
    </button>


   

    <!-- Offcanvas Panel -->
    <x-frontend.offcanvas-right/>

    <!-- ═══════════════════════════════════════
     JAVASCRIPT (minimal, no framework)
═══════════════════════════════════════ -->
    <script>
        // Mobile nav toggle
        document.addEventListener('DOMContentLoaded', function () {
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileMenu = document.querySelector('.header-nav');
    const fadeOverlay = document.querySelector('.fade-overlay');
    const spans = mobileToggle.querySelectorAll('span');

    if (mobileToggle && mobileMenu && fadeOverlay) {
        function toggleMenu() {
            const isExpanded = mobileToggle.getAttribute('aria-expanded') === 'true';
            
            mobileToggle.setAttribute('aria-expanded', !isExpanded);
            
            if (!isExpanded) {
                // মেনু ওপেন হবে
                mobileMenu.classList.remove('max-lg:-left-75');
                mobileMenu.classList.add('max-lg:left-0');
                
                fadeOverlay.classList.remove('opacity-0', 'visible', 'pointer-events-none');
                fadeOverlay.classList.add('opacity-50', 'visible');

                // তিন লাইন থেকে ক্রস (X) এ রূপান্তর
                if (spans.length >= 3) {
                    spans[0].classList.add('rotate-45', 'translate-y-2.25');
                    spans[1].classList.add('opacity-0');
                    spans[2].classList.add('-rotate-45', '-translate-y-2.25');
                }
            } else {
                // মেনু বন্ধ হবে
                mobileMenu.classList.remove('max-lg:left-0');
                mobileMenu.classList.add('max-lg:-left-75');
                
                fadeOverlay.classList.remove('opacity-50', 'visible');
                fadeOverlay.classList.add('opacity-0', 'visible', 'pointer-events-none');

                // ক্রস থেকে আবার আগের তিন লাইনে ফিরিয়ে আনা
                if (spans.length >= 3) {
                    spans[0].classList.remove('rotate-45', 'translate-y-2.25');
                    spans[1].classList.remove('opacity-0');
                    spans[2].classList.remove('-rotate-45', '-translate-y-2.25');
                }
            }
        }

        // টগল বাটনে ক্লিক করলে
        mobileToggle.addEventListener('click', toggleMenu);

        // ব্যাকগ্রাউন্ড ওভারলেতে ক্লিক করলে মেনু বন্ধ হবে
        fadeOverlay.addEventListener('click', toggleMenu);
    }
});

        // Traveler counter
        let travelers = 1;

        function adjustTravelers(delta) {
            travelers = Math.max(1, travelers + delta);
            document.getElementById("traveler-count").textContent = travelers;
        }

        // Back-to-top visibility
        const backTop = document.getElementById("back-top");
        window.addEventListener("scroll", () => {
            backTop.style.display = window.scrollY > 400 ? "flex" : "none";
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const targetId = "offcanvas-right";
            const drawer = document.getElementById(targetId);

            // ওপেন করার বাটনগুলো সিলেক্ট করা
            const triggers = document.querySelectorAll(`[data-drawer-target="${targetId}"]`);
            // ক্লোজ করার বাটন সিলেক্ট করা
            const closers = drawer.querySelectorAll(`[data-drawer-hide="${targetId}"]`);

            // ওপেন করার ফাংশন
            triggers.forEach(trigger => {
                trigger.addEventListener("click", function() {
                    drawer.classList.remove("translate-x-full");
                    drawer.classList.add("translate-x-0");
                });
            });

            // ক্লোজ করার ফাংশন
            closers.forEach(closer => {
                closer.addEventListener("click", function() {
                    drawer.classList.remove("translate-x-0");
                    drawer.classList.add("translate-x-full");
                });
            });

            // বাইরে কোথাও ক্লিক করলেও প্যানেল বন্ধ হয়ে যাবে (অপশনাল)
            document.addEventListener("click", function(event) {
                if (!drawer.contains(event.target) && !Array.from(triggers).some(t => t.contains(event
                        .target))) {
                    drawer.classList.remove("translate-x-0");
                    drawer.classList.add("translate-x-full");
                }
            });
        });
    </script>
</body>

</html>
