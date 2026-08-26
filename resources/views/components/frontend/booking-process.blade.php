<section class="relative bg-[#e8f8f5] py-20 px-6 lg:px-16 border-b-4 border-indigo-950 overflow-hidden">
    <div class="max-w-5xl mx-auto relative z-10">
        <!-- Heading -->
        <div class="text-center mb-14">
            <h2 class="text-3xl lg:text-4xl font-bold text-indigo-900">
                Easy Steps <span class="text-gold-400">For Bookings</span>
            </h2>
            <p class="text-gray-500 mt-3 text-sm">
                Destinations worth exploring! Here are a few popular spots
            </p>
            <div class="flex items-center justify-center gap-2 mt-2 text-gray-300">
                <span class="text-sm">✈</span>
                <div class="w-16 border-t border-dashed border-gray-300"></div>
                <div class="w-5 h-5 rounded-full border border-gray-300"></div>
            </div>
        </div>

        <!-- Three step cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Step 01 -->
            <div class="bg-white rounded-3xl p-7 shadow-sm">
                <div class="flex items-start justify-between mb-6">
                    <div class="bg-indigo-900 text-white text-lg font-black w-12 h-12 rounded-xl flex items-center justify-center">
                        01
                    </div>
                    <div class="w-16 h-16 rounded-full border-[3px] border-gold-400 flex items-center justify-center text-2xl text-indigo-900">
                        📍
                    </div>
                </div>
                <h3 class="text-indigo-900 font-bold text-lg mb-2">
                    Choose Destination
                </h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    All you have to do is, first select your preferred destination and proceed.
                </p>
            </div>

            <!-- Step 02 -->
            <div class="bg-white rounded-3xl p-7 shadow-sm">
                <div class="flex items-start justify-between mb-6">
                    <div class="bg-indigo-900 text-white text-lg font-black w-12 h-12 rounded-xl flex items-center justify-center">
                        02
                    </div>
                    <div class="w-16 h-16 rounded-full border-[3px] border-gold-400 flex items-center justify-center text-2xl text-indigo-900">
                        💳
                    </div>
                </div>
                <h3 class="text-indigo-900 font-bold text-lg mb-2">Make Payment</h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    You are important to us. We pay attention to the quality of every service we provide to you.
                </p>
            </div>

            <!-- Step 03 -->
            <div class="bg-white rounded-3xl p-7 shadow-sm">
                <div class="flex items-start justify-between mb-6">
                    <div class="bg-indigo-900 text-white text-lg font-black w-12 h-12 rounded-xl flex items-center justify-center">
                        03
                    </div>
                    <div class="w-16 h-16 rounded-full border-[3px] border-gold-400 flex items-center justify-center text-2xl text-indigo-900">
                        🧳
                    </div>
                </div>
                <h3 class="text-indigo-900 font-bold text-lg mb-2">
                    Ready For Travelling
                </h3>
                <p class="text-gray-500 text-sm leading-relaxed">
                    We have seen that you have fulfilled all the requirements, now you are ready to travel.
                </p>
            </div>
        </div>

        <!-- Promo banner -->
        <div class="relative bg-amber-500 rounded-2xl px-8 mb-16 py-8 overflow-hidden flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="promo-clouds">
                <span></span><span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span><span></span>
                <span></span><span></span><span></span><span></span><span></span>
            </div>
            <div class="relative flex items-end gap-3 flex-wrap">
                <span class="text-white font-black leading-none" style="font-size: clamp(3rem, 8vw, 5rem)">48</span>
                <div class="mb-2">
                    <span class="text-white text-xl font-black">%</span>
                    <p class="text-white font-black text-xs">OFF</p>
                </div>
                <div class="mb-2">
                    <p class="text-white/90 text-sm italic font-display">
                        Get Special Offer
                    </p>
                    <h3 class="font-display font-bold text-indigo-900 text-xl lg:text-3xl">
                        Tours and Trip Packages, Globally
                    </h3>
                </div>
            </div>
            <button class="relative bg-white text-indigo-900 font-bold px-7 py-3.5 rounded-full hover:bg-gray-50 transition-all hover:scale-105 whitespace-nowrap shadow-md">
                Discover More
            </button>
        </div>
    </div>

    <!-- Bottom Decorations (Marquee & Tree) inside relative section -->
    <marquee direction="right" class="absolute left-0 bottom-0 z-2 pointer-events-none">
        <div class="relative w-71 h-33.75">
            <img class="absolute left-0 bottom-0 h-33.75" src="{{ asset('img/Left-Car.png') }}" alt="img" width="248" height="135" loading="lazy">
            <span class="absolute left-[10.1%] bottom-0 w-[15%]">
                <img src="{{ asset('img/Left-Car-tyre.png') }}" alt="img" class="animate-spin" width="43" height="43" loading="lazy">
            </span>
            <span class="absolute right-[20.8%] bottom-0 w-[15%]">
                <img src="{{ asset('img/Left-Car-tyre.png') }}" alt="img" class="animate-spin" width="43" height="43" loading="lazy">
            </span>
        </div>
    </marquee>

    <div class="absolute right-0 bottom-0 z-0 w-55 pointer-events-none">
        <img src="{{ asset('img/Righttreepic.png') }}" alt="img" width="220" height="146" loading="lazy">
    </div>
</section>