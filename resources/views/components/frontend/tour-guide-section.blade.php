<section class="bg-white py-20 px-6 lg:px-16">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-teal-700">
                Meet With <span class="text-gold-400">Tour Guide</span>
            </h2>
            <p class="text-gray-400 text-sm mt-2">
                Destinations worth exploring! Here are a few popular spots
            </p>
        </div>

        <div class="row flex flex-wrap items-center justify-between">
            <!-- Left Column: Circle Background, Text & Main Travel Image -->
            <div class="md:w-1/2 w-full flex items-center justify-center">
                <div
                    class="relative text-center z-1 w-full max-w-[739px] flex flex-col items-center justify-center my-10">

                    <!-- Background Circle Shape (Rotating & Centered) -->
                    <img src="{{ asset('img/CircleShape.png') }}" alt="Circle Shape"
                        class="absolute inset-0 m-auto -z-1 animate-spinZ w-[80%] sm:w-[90%] max-w-[715px] h-auto pointer-events-none"
                        loading="lazy">

                    <!-- Text Overlay (Placed precisely inside the circle) -->
                    <div class="absolute top-[12%] sm:top-[15%] z-10 w-full px-4">
                        <h3
                            class="font-display font-normal 2xl:text-52 sm:text-40 text-3xl leading-[1.2] text-[#1b4332] pb-1">
                            Meet with
                        </h3>
                        <span
                            class="font-display 2xl:text-7xl sm:text-6xl text-36 leading-none text-white block drop-shadow-[2px_5px_0px_rgba(41,137,145,0.3)]">
                            Expert guide
                        </span>
                    </div>

                    <!-- Main Travel/People Image -->
                    <img src="{{ asset('img/travelsbg.png') }}" alt="Travel Guide"
                        class="relative z-15 w-[65%] sm:w-94 max-w-[539px] rounded-b-full h-auto mt-16 sm:mt-20" loading="lazy">

                </div>
            </div>

            <!-- Right Column: Tourist Guides Grid -->
            <div class="md:w-1/2 w-full px-4">
                <!-- Tour guide grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <!-- Card 1 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow text-center">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=300&h=300&fit=crop&auto=format&crop=face"
                            alt="Murphy"
                            class="w-20 h-20 rounded-xl object-cover mx-auto mb-3 border-2 border-teal-800" />
                        <div class="flex items-center justify-center gap-1.5 mb-3">
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors">
                                <span class="text-[8px] font-black">𝕏</span>
                            </button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors">
                                <svg class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                                </svg>
                            </button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <rect x="2" y="2" width="20" height="20" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                </svg>
                            </button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors">
                                <svg class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg>
                            </button>
                        </div>
                        <p class="text-teal-700 font-bold text-sm">Murphy</p>
                        <p class="text-amber-500 text-xs">Tourist Guide</p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow text-center">
                        <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=300&h=300&fit=crop&auto=format&crop=face"
                            alt="Alexis Cox"
                            class="w-20 h-20 rounded-xl object-cover mx-auto mb-3 border-2 border-teal-800" />
                        <div class="flex items-center justify-center gap-1.5 mb-3">
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><span
                                    class="text-[8px] font-black">𝕏</span></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                                </svg></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <rect x="2" y="2" width="20" height="20" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                </svg></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg></button>
                        </div>
                        <p class="text-teal-700 font-bold text-sm">Alexis Cox</p>
                        <p class="text-amber-500 text-xs">Tourist Guide</p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow text-center">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=300&h=300&fit=crop&auto=format&crop=face"
                            alt="Murray"
                            class="w-20 h-20 rounded-xl object-cover mx-auto mb-3 border-2 border-teal-800" />
                        <div class="flex items-center justify-center gap-1.5 mb-3">
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><span
                                    class="text-[8px] font-black">𝕏</span></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                                </svg></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <rect x="2" y="2" width="20" height="20" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                </svg></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg></button>
                        </div>
                        <p class="text-teal-700 font-bold text-sm">Murray</p>
                        <p class="text-amber-500 text-xs">Tourist Guide</p>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm hover:shadow-md transition-shadow text-center">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&auto=format&crop=face"
                            alt="Crawford"
                            class="w-20 h-20 rounded-xl object-cover mx-auto mb-3 border-2 border-teal-800" />
                        <div class="flex items-center justify-center gap-1.5 mb-3">
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><span
                                    class="text-[8px] font-black">𝕏</span></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                                </svg></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <rect x="2" y="2" width="20" height="20" rx="5" />
                                    <circle cx="12" cy="12" r="4" />
                                </svg></button>
                            <button
                                class="w-6 h-6 bg-teal-800 rounded-full flex items-center justify-center text-white hover:bg-teal-600 transition-colors"><svg
                                    class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 2424">
                                    <path
                                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                </svg></button>
                        </div>
                        <p class="text-teal-700 font-bold text-sm">Crawford</p>
                        <p class="text-amber-500 text-xs">Tourist Guide</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
