<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO Meta Tags -->
    <title><?php echo e($settings->meta_title ?? $settings->site_name ?? 'Travel ERP'); ?></title>
    <meta name="description" content="<?php echo e($settings->meta_description ?? $settings->site_tagline ?? ''); ?>" />
    <meta name="keywords" content="<?php echo e($settings->meta_keywords ?? ''); ?>" />

    <!-- Open Graph / Social Share Image -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($settings->og_image)): ?>
        <meta property="og:image" content="<?php echo e(asset('storage/' . $settings->og_image)); ?>" />
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Dynamic Favicon -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($settings->favicon)): ?>
        <link rel="icon" type="image/png" href="<?php echo e(asset('storage/' . $settings->favicon)); ?>">
    <?php else: ?>
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('admin-end/assets/favicon_io/favicon-16x16.png')); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- External CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vite Assets (CSS & JS) -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
        
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <!-- Navbar Component -->
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

    <!-- Main Content Yield -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer Component -->
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
 <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <!-- Stack for Page Specific Scripts -->
    <?php echo $__env->yieldPushContent('scripts'); ?>
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

</html><?php /**PATH C:\Users\rubay\Desktop\New folder\snapair-erp\resources\views/layouts/frontend/layouts.blade.php ENDPATH**/ ?>