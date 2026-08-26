<!-- WE RECOMMEND SECTION START -->
<section class="py-16 md:py-24 bg-white dark:bg-dark overflow-hidden">
    <div class="container max-w-7xl mx-auto px-4 ">
        <div class="flex flex-wrap items-center -mx-2">

            <!-- LEFT COLUMN: IMAGES COMPOSITION -->
            <div class="lg:w-7/12 w-full">
                <div
                    class="relative pt-12 lg:mr-6 sm:h-152.5 h-[480px] max-lg:mb-7.5 flex flex-col items-center justify-center">
                    <!-- Floating Airplane -->
                    <div class="absolute top-2 right-4 z-100 animate-slide-left max-sm:w-36">
                        <img src="<?php echo e(asset('img/airplane.png')); ?>" alt="airplane" class="max-md:w-full" loading="lazy">
                    </div>

                    <!-- Left Image (Top Shape background) -->
                    <div class="absolute top-0 left-0 w-3/5 sm:max-w-64 max-w-52 overflow-hidden z-0">
                        <img src="<?php echo e(asset('img/we-rec-pic5.jpg')); ?>" alt="image"
                            class="w-full rounded-tr-[80px] rounded-br-[80px] rounded-s-3xl" loading="lazy">
                    </div>

                    <!-- Center Circle Image -->
                    <div
                        class="md:size-90 sm:size-67.5 size-56 md:border-[20px] border-6 border-white rounded-full shadow-circle-bx2 absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                        <img src="<?php echo e(asset('img/we-rec-pic3.jpg')); ?>" alt="image"
                            class="w-full h-full rounded-full object-cover" loading="lazy">
                    </div>

                    <!-- Right Image (Bottom Shape background) -->
                    <div class="absolute bottom-0 right-0 w-3/5 sm:max-w-64 max-w-52 overflow-hidden z-0">
                        <img src="<?php echo e(asset('img/we-rec-pic4.jpg')); ?>" alt="image"
                            class="w-full rounded-tl-[80px] rounded-bl-[80px] rounded-4xl" loading="lazy">
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: CONTENT SECTION -->
            <div class="w-full lg:w-5/12 px-4">
                <div class="relative pl-0 lg:pl-4 pr-0 xl:pr-14">

                    <!-- Section Title -->
                    <div class="mb-6">
                        <h2 class="text-3xl sm:text-4xl xl:text-[42px] font-bold text-[#0F4146] leading-[1.2] mb-4">
                            We <span class="text-[#F5B014]">Recommend</span> Beautiful Destinations Every Month
                        </h2>
                        <p class="text-gray-500 text-sm sm:text-base leading-relaxed">
                            Travlla is a multi-award-winning strategy and content creation agency that specializes in
                            travel marketing. They have one of the world's largest and most influential online travel
                            communities, helping brands and tourism.
                        </p>
                    </div>

                    <!-- Card 1: Trusted Travel Guide -->
                    <div
                        class="flex items-start gap-4 p-4 mb-4 bg-white rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] max-w-md">
                        <div class="w-12 h-12 min-w-12 flex items-center justify-center pt-1">
                            
                            <span class="text-2xl shrink-0">🧭</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-[#0F4146]">Trusted travel guide</h3>
                            <p class="text-xs text-gray-500 mt-1 leading-snug">Provides reliable information to help
                                travelers plan their trips efficiently and safely.</p>
                        </div>
                    </div>

                    <!-- Card 2: Mission & Vision -->
                    <div
                        class="flex items-start gap-4 p-4 mb-8 bg-white rounded-2xl border border-gray-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] max-w-md">
                        <div class="w-12 h-12 min-w-12 flex items-center justify-center pt-1">
                            
                            <span class="text-2xl shrink-0">🌟</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-[#0F4146]">Mission & Vision</h3>
                            <p class="text-xs text-gray-500 mt-1 leading-snug">Aims to connect people to positive
                                experience through travel, helping them see the world differently.</p>
                        </div>
                    </div>

                    <!-- Action Button & Happy Customers -->
                    <div class="flex flex-wrap items-center gap-6">
                        <!-- CTA Button -->
                        <a href="destination-detail.html"
                            class="px-7 py-3.5 bg-indigo-950 text-white font-bold text-sm rounded-full hover:bg-indigo-800 transition shadow-md inline-block">
                            Discover More
                        </a>

                        <!-- Customers Review -->
                        <div class="flex items-center gap-3">
                            <div class="flex -space-x-3 overflow-hidden">
                                <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white object-cover"
                                    src="<?php echo e(asset('assets/images/hpy-cus/pic1.jpg')); ?>" alt="Customer 1">
                                <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white object-cover"
                                    src="<?php echo e(asset('assets/images/hpy-cus/pic2.jpg')); ?>" alt="Customer 2">
                                <img class="inline-block h-9 w-9 rounded-full ring-2 ring-white object-cover"
                                    src="<?php echo e(asset('assets/images/hpy-cus/pic3.jpg')); ?>" alt="Customer 3">
                            </div>
                            <div>
                                <span class="block font-black text-lg text-indigo-950 leading-none">3.5k</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Happy
                                    Customer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Vertical Badge: "25 Years of Experience" -->
                    <div
                        class="hidden xl:flex absolute right-0 top-1/2 -translate-y-1/2 translate-x-12 items-center gap-2 -rotate-90 origin-right">
                        <span class="text-5xl font-black text-[#F5B014] leading-none">25</span>
                        <span
                            class="text-[10px] font-black text-[#0F4146] uppercase tracking-wider leading-tight w-20">Years
                            of Experience</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- WE RECOMMEND SECTION END -->
<?php /**PATH C:\Users\rubay\Desktop\New folder\snapair-erp\resources\views/components/frontend/recommended-section.blade.php ENDPATH**/ ?>