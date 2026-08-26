<section class="bg-[#e8f8f5] py-20 px-6 lg:px-16 relative overflow-hidden">
        <!-- Hot air balloon deco -->
        <div class="absolute left-4 bottom-8 text-6xl pointer-events-none select-none opacity-70">
            🎈
        </div>

        <div class="max-w-3xl mx-auto relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-teal-700">
                    Our Client <span class="text-gold-400">Says!</span>
                </h2>
                <p class="text-gray-400 text-sm mt-2">
                    Destinations worth exploring! Here are a few popular spots
                </p>
            </div>

            <div class="grid sm:grid-cols-2 gap-6 mb-8">
                <!-- Testimonial 1 -->
                <x-frontend.testimonial-card/>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm">
                    <img src="https://images.unsplash.com/photo-1522529599102-193c0d76b5b6?w=500&h=240&fit=crop&auto=format&crop=top"
                        alt="Kavin Martin" class="w-full h-44 object-cover object-top" />
                    <div class="px-5 pb-5 pt-2">
                        <div class="flex items-start justify-between mb-1">
                            <div>
                                <p class="font-bold text-teal-700 font-display" style="font-size: 18px">
                                    Kavin Martin
                                </p>
                                <p class="text-gold-400 text-xs font-semibold">Traveler</p>
                            </div>
                            <svg class="w-8 h-8 text-gray-200" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>
                        </div>
                        <div class="flex gap-0.5 mb-2">
                            <span class="text-gold-400 text-sm">★★★★★</span>
                        </div>
                        <p class="text-gray-500 text-xs leading-relaxed">
                            The safety and comfort provided at every stage of the journey
                            was outstanding. I would strongly recommend Travlla for a
                            world-class travel experience.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation arrows -->
            <div class="flex justify-center gap-3">
                <button
                    class="w-10 h-10 bg-gold-400 hover:bg-gold-500 text-white rounded-full flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="w-10 h-10 bg-gold-400 hover:bg-gold-500 text-white rounded-full flex items-center justify-center transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
