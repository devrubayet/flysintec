
<footer class="bg-indigo-950 pt-14 pb-6 px-6 lg:px-16">
    <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">
        <!-- Brand -->
        <div>
            <a href="<?php echo e(route('home')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?php echo e(asset('storage/' . ($settings?->logo ?? ''))); ?>" class="h-20"
                    alt="<?php echo e($settings?->site_name ?? 'Logo'); ?>" />
            </a>
            <p class="text-white/50 text-sm leading-relaxed mb-5">
                <?php echo e($settings?->site_tagline ?? ''); ?>

            </p>
            <div class="flex gap-3">
                <a href="#"
                    class="w-8 h-8 bg-white/10 hover:bg-lime-400 rounded-full flex items-center justify-center text-white/70 hover:text-white transition-all">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                    </svg>
                </a>
                <a href="#"
                    class="w-8 h-8 bg-white/10 hover:bg-lime-400 rounded-full flex items-center justify-center text-white/70 hover:text-white transition-all">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                </a>
                <a href="#"
                    class="w-8 h-8 bg-white/10 hover:bg-indigo-400 rounded-full flex items-center justify-center text-white/70 hover:text-white transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5" />
                        <circle cx="12" cy="12" r="4" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-white font-semibold uppercase tracking-widest text-xs mb-4">
                Quick Links
            </h4>
            <ul class="space-y-2">
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Home</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">About
                        Us</a>
                </li>
                <li>
                    <a href="#"
                        class="text-white/50 text-sm hover:text-lime-400 transition-colors">Destinations</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Tours</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Blog</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Destinations -->
        <div>
            <h4 class="text-white font-semibold uppercase tracking-widest text-xs mb-4">
                Destinations
            </h4>
            <ul class="space-y-2">
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Bali,
                        Indonesia</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Maldives</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Paris,
                        France</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Kashmir</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Thailand</a>
                </li>
                <li>
                    <a href="#" class="text-white/50 text-sm hover:text-lime-400 transition-colors">Mauritius</a>
                </li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-white font-semibold uppercase tracking-widest text-xs mb-4">
                Contact Us
            </h4>
            <ul class="space-y-2">
                <li>
                    <a href="#"
                        class="text-white/50 text-sm hover:text-lime-400 transition-colors"><?php echo e($settings?->email ?? ''); ?></a>
                </li>
                <li>
                    <a href="#"
                        class="text-white/50 text-sm hover:text-lime-400 transition-colors"><?php echo e($settings?->phone_primary ?? ''); ?>

                    </a>
                </li>
                <li><span class="text-white/50 text-sm"><?php echo e($settings?->address_line ?? ''); ?>,
                        <?php echo e($settings?->city ?? ''); ?>, <?php echo e($settings?->country ?? ''); ?></span></li>
                <li><span class="text-white/50 text-sm">Mon–Fri, 9am–6pm</span></li>
            </ul>
        </div>
    </div>
    <div
        class="max-w-5xl mx-auto border-t border-white/10 pt-5 flex flex-col sm:flex-row justify-between items-center gap-2">
        <p class="text-white/30 text-xs">
            © 2026 Sintec Tours & Travels. All rights reserved.
        </p>
        <p class="text-white/30 text-xs">
            Made with ♥ for adventurers worldwide
        </p>
    </div>
</footer>
<?php /**PATH C:\Users\rubay\Desktop\New folder\snapair-erp\resources\views/components/frontend/footer.blade.php ENDPATH**/ ?>