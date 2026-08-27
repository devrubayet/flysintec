<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <link rel="icon" type="image/x-icon" src="<?php echo e(asset('storage/' . ($settings?->favicon ?? ''))); ?>"/>
    <title><?php echo e($settings?->site_name ?? ''); ?> | <?php echo e($settings?->site_tagline ?? ''); ?></title>
    <!-- Vite Assets -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>


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

<body data-theme="dark" class="font-body light" >
    <?php if (isset($component)) { $__componentOriginal52356ccfc399747292104bf67c421150 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52356ccfc399747292104bf67c421150 = $attributes; } ?>
<?php $component = App\View\Components\Frontend\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Frontend\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52356ccfc399747292104bf67c421150)): ?>
<?php $attributes = $__attributesOriginal52356ccfc399747292104bf67c421150; ?>
<?php unset($__attributesOriginal52356ccfc399747292104bf67c421150); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52356ccfc399747292104bf67c421150)): ?>
<?php $component = $__componentOriginal52356ccfc399747292104bf67c421150; ?>
<?php unset($__componentOriginal52356ccfc399747292104bf67c421150); ?>
<?php endif; ?>
    <!-- HEADER END -->

    <?php if (isset($component)) { $__componentOriginal15c185becdf89bd6432b3aab4b506c8d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal15c185becdf89bd6432b3aab4b506c8d = $attributes; } ?>
<?php $component = App\View\Components\Frontend\Hero::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Frontend\Hero::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal15c185becdf89bd6432b3aab4b506c8d)): ?>
<?php $attributes = $__attributesOriginal15c185becdf89bd6432b3aab4b506c8d; ?>
<?php unset($__attributesOriginal15c185becdf89bd6432b3aab4b506c8d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15c185becdf89bd6432b3aab4b506c8d)): ?>
<?php $component = $__componentOriginal15c185becdf89bd6432b3aab4b506c8d; ?>
<?php unset($__componentOriginal15c185becdf89bd6432b3aab4b506c8d); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     EASY STEPS FOR BOOKINGS
═══════════════════════════════════════ -->
   <?php if (isset($component)) { $__componentOriginalbb60a0aa0dc3432bb124840280156d07 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb60a0aa0dc3432bb124840280156d07 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.booking-process','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.booking-process'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb60a0aa0dc3432bb124840280156d07)): ?>
<?php $attributes = $__attributesOriginalbb60a0aa0dc3432bb124840280156d07; ?>
<?php unset($__attributesOriginalbb60a0aa0dc3432bb124840280156d07); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb60a0aa0dc3432bb124840280156d07)): ?>
<?php $component = $__componentOriginalbb60a0aa0dc3432bb124840280156d07; ?>
<?php unset($__componentOriginalbb60a0aa0dc3432bb124840280156d07); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     TOP DESTINATIONS
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal50caf89d137c45c8a5284cbe09af68ef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50caf89d137c45c8a5284cbe09af68ef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.top-destination','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.top-destination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50caf89d137c45c8a5284cbe09af68ef)): ?>
<?php $attributes = $__attributesOriginal50caf89d137c45c8a5284cbe09af68ef; ?>
<?php unset($__attributesOriginal50caf89d137c45c8a5284cbe09af68ef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50caf89d137c45c8a5284cbe09af68ef)): ?>
<?php $component = $__componentOriginal50caf89d137c45c8a5284cbe09af68ef; ?>
<?php unset($__componentOriginal50caf89d137c45c8a5284cbe09af68ef); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     WE RECOMMEND BEAUTIFUL DESTINATIONS
    ═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginalcfc4c29a73338ebb769f6cb9e298b191 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.recommended-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.recommended-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191)): ?>
<?php $attributes = $__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191; ?>
<?php unset($__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcfc4c29a73338ebb769f6cb9e298b191)): ?>
<?php $component = $__componentOriginalcfc4c29a73338ebb769f6cb9e298b191; ?>
<?php unset($__componentOriginalcfc4c29a73338ebb769f6cb9e298b191); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     CULTURAL TOURS
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal92b492e03b217dc3e3b4b70da6f1c466 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.cultural-tour-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.cultural-tour-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466)): ?>
<?php $attributes = $__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466; ?>
<?php unset($__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92b492e03b217dc3e3b4b70da6f1c466)): ?>
<?php $component = $__componentOriginal92b492e03b217dc3e3b4b70da6f1c466; ?>
<?php unset($__componentOriginal92b492e03b217dc3e3b4b70da6f1c466); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     TOUR CATEGORIES BANNER
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.tour-categories-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.tour-categories-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60)): ?>
<?php $attributes = $__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60; ?>
<?php unset($__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60)): ?>
<?php $component = $__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60; ?>
<?php unset($__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     MEET WITH TOUR GUIDE
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginale21f2dc341e3c49347b5b454004016e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale21f2dc341e3c49347b5b454004016e0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.tour-guide-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.tour-guide-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale21f2dc341e3c49347b5b454004016e0)): ?>
<?php $attributes = $__attributesOriginale21f2dc341e3c49347b5b454004016e0; ?>
<?php unset($__attributesOriginale21f2dc341e3c49347b5b454004016e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21f2dc341e3c49347b5b454004016e0)): ?>
<?php $component = $__componentOriginale21f2dc341e3c49347b5b454004016e0; ?>
<?php unset($__componentOriginale21f2dc341e3c49347b5b454004016e0); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal962631a3c390d43fbdb373999e2db14a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal962631a3c390d43fbdb373999e2db14a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.testominal-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.testominal-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal962631a3c390d43fbdb373999e2db14a)): ?>
<?php $attributes = $__attributesOriginal962631a3c390d43fbdb373999e2db14a; ?>
<?php unset($__attributesOriginal962631a3c390d43fbdb373999e2db14a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal962631a3c390d43fbdb373999e2db14a)): ?>
<?php $component = $__componentOriginal962631a3c390d43fbdb373999e2db14a; ?>
<?php unset($__componentOriginal962631a3c390d43fbdb373999e2db14a); ?>
<?php endif; ?>
    <!-- ═══════════════════════════════════════
     FOOTER
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5 = $attributes; } ?>
<?php $component = App\View\Components\Frontend\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Frontend\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5)): ?>
<?php $attributes = $__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5; ?>
<?php unset($__attributesOriginal8ab008c7fdbb32d76d8e812a6af72cc5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5)): ?>
<?php $component = $__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5; ?>
<?php unset($__componentOriginal8ab008c7fdbb32d76d8e812a6af72cc5); ?>
<?php endif; ?>

    <!-- Back to top -->
    <button id="back-top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-6 right-6 bg-indigo-700 hover:bg-indigo-900 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg transition-all hover:scale-110 z-50">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
        </svg>
    </button>


   

    <!-- Offcanvas Panel -->
    <?php if (isset($component)) { $__componentOriginal1e497e72cae80fe953f96a285ff71e50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e497e72cae80fe953f96a285ff71e50 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.offcanvas-right','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.offcanvas-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e497e72cae80fe953f96a285ff71e50)): ?>
<?php $attributes = $__attributesOriginal1e497e72cae80fe953f96a285ff71e50; ?>
<?php unset($__attributesOriginal1e497e72cae80fe953f96a285ff71e50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e497e72cae80fe953f96a285ff71e50)): ?>
<?php $component = $__componentOriginal1e497e72cae80fe953f96a285ff71e50; ?>
<?php unset($__componentOriginal1e497e72cae80fe953f96a285ff71e50); ?>
<?php endif; ?>

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
<?php /**PATH C:\Users\rubay\Desktop\New folder\snapair-erp\resources\views/welcome.blade.php ENDPATH**/ ?>