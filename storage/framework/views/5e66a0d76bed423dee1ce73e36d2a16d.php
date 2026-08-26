<div class="page-content">
        <!-- Banner Style One -->
        <div class="2xl:h-full lg:h-full overflow-hidden relative pb-12 lg:pb-20"
            style="background-image: url('<?php echo e(asset('img/hero-bg.png')); ?>'); background-size: cover; background-position: center;">

            <div
                class="bg-black/20 lg:rounded-3xl lg:m-8.75 lg:mt-0 lg:top-8.75 2xl:h-full relative z-2 flex justify-between max-lg:text-center overflow-hidden pb-16">
                <div class="max-w-480 mx-auto relative w-full lg:pb-0 pb-10">
                    <div class="px-5 pt-30 sm:pt-37.5 lg:pl-7.5 2xl:pt-50 2xl:pl-17.5 lg:pr-0 max-w-255">
                        <span
                            class="xl:text-5xl text-28 leading-17.5 text-white lg:pl-12.5 font-display block">Discover</span>

                        <div class="relative">
                            <h1 class="!font-display 4xl:!text-50xl 2xl:!text-40xl md:!text-30xl sm:!text-80 text-5xl !text-white relative inline-block mb-5 animate-slide-left"
                                title="The World">The World</h1>
                        </div>

                        <div
                            class="xl:text-28 sm:text-xl text-lg leading-7.5 text-white relative mb-7.5 italic lg:pl-12.5">
                            The Safety of our customers at all stages
                        </div>

                        <div class="mb-10 lg:pl-12.5 relative z-4">
                            <a href="contact.html" class="bg-amber-600 px-3 py-2 rounded-full">Get In Touch</a>
                        </div>

                        <!-- SEARCH BAR START -->
                        <div class="lg:w-162.5 w-full lg:ml-12.5 lg:mb-7.5 relative z-100">
                            <div
                                class="bg-white lg:rounded-25xl rounded-2xl sm:pt-3 sm:pr-3.25 sm:pb-2.25 sm:pl-10 p-5 shadow-lg">
                                <form>
                                    <div
                                        class="flex justify-between items-center max-lg:flex-wrap max-sm:flex-col gap-4 lg:gap-0">

                                        <!-- Location -->
                                        <div
                                            class="lg:w-42.5 sm:w-[48%] w-full max-sm:mb-5 max-lg:mb-5 max-lg:border-b border-paleaqua custom-select pb-2 lg:pb-0">
                                            <div class="form-group text-start" data-label="Color">
                                                <label
                                                    class="text-xl text-primary font-bold font-title block">Location</label>
                                                <select
                                                    class="dynamic-select w-full bg-transparent outline-none cursor-pointer"
                                                    id="sortingSelect">
                                                    <option value="Zealand" selected>New Zealand</option>
                                                    <option value="Paris">Paris</option>
                                                    <option value="Bali">Bali</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Date -->
                                        <div
                                            class="lg:w-42.5 sm:w-[48%] w-full max-sm:mb-5 max-lg:mb-5 max-lg:border-b border-paleaqua pb-2 lg:pb-0">
                                            <div class="text-start">
                                                <label
                                                    class="text-xl text-primary font-bold font-title block">Date</label>
                                                <div class="relative">
                                                    <input
                                                        class="outline-none h-8.5 w-full p-0 font-base font-normal text-sm text-darkgray bg-transparent placeholder:!text-darkgray flatpickr1"
                                                        placeholder="Date">
                                                    <span
                                                        class="absolute right-3.75 bottom-2 text-input text-sm pointer-events-none">
                                                        <i class="fa fa-solid fa-calendar-days"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Traveler -->
                                        <div
                                            class="lg:w-42.5 sm:w-[48%] w-full max-sm:mb-5 max-lg:mb-5 max-lg:border-b border-paleaqua pb-2 lg:pb-0">
                                            <div class="text-start">
                                                <label
                                                    class="text-xl text-primary font-bold font-title block">Traveler</label>
                                                <div class="input-group">
                                                    <span class="flex items-center gap-2.5 w-full">
                                                        <input type="number" step="1" value="1"
                                                            name="quantity"
                                                            class="touchspin h-8 lg:w-17.5 w-full leading-6.75 text-darkgray font-bold outline-none font-base text-sm text-center border rounded px-1">
                                                        <button type="button" value="-" data-field="quantity"
                                                            aria-label="Decrease quantity"
                                                            class="button-minus cursor-pointer size-6 leading-6 text-center text-base text-input bg-gray-100 rounded">
                                                            <i class="las la-minus text-sm" aria-hidden="true"></i>
                                                        </button>
                                                        <button type="button" value="+" data-field="quantity"
                                                            aria-label="Increase quantity"
                                                            class="button-plus cursor-pointer size-6 leading-6 text-center text-base text-input bg-gray-100 rounded">
                                                            <i class="las la-plus text-sm" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="lg:w-auto w-full flex justify-center">
                                            <button type="submit"
                                                class="text-28 rounded-2lg sm:rounded-full size-15 bg-secondary text-primary max-lg:!w-full duration-500 cursor-pointer hover:bg-citrusyellow flex items-center justify-center"
                                                aria-label="Search">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- SEARCH BAR END -->

                        <!-- Social Links -->
                        <div class="lg:pl-12.5 text-white flex items-center max-lg:justify-center mt-6">
                            <span
                                class="py-7.5 pr-26.25 lg:py-0 text-xs leading-4.5 tracking-[0.2em] uppercase relative inline-block after:content-[''] after:absolute after:w-16 after:h-px after:bg-white after:right-5 after:top-1/2 after:-translate-y-1/2">
                                Follow Us
                            </span>
                            <ul class="flex">
                                <li>
                                    <a href="https://www.facebook.com" target="_blank"
                                        class="text-white text-xl ml-5 duration-500 block hover:text-secondary hover:-translate-y-1.25"
                                        aria-label="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com" target="_blank"
                                        class="text-white text-xl ml-5 duration-500 block hover:text-secondary hover:-translate-y-1.25"
                                        aria-label="LinkedIn">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank"
                                        class="text-white text-xl ml-5 duration-500 block hover:text-secondary hover:-translate-y-1.25"
                                        aria-label="Instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.x.com" target="_blank"
                                        class="text-white text-xl ml-5 duration-500 block hover:text-secondary hover:-translate-y-1.25"
                                        aria-label="Twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Background Animated Circles -->
                        <div class="twm-img-bg-circle-area">
                            <div class="twm-img-bg-circle1-wrap">
                                <div class="twm-img-bg-circle1 rotate-center"><span></span></div>
                            </div>
                            <div class="twm-img-bg-circle2-wrap">
                                <div class="twm-img-bg-circle2 rotate-center-reverse"><span></span></div>
                            </div>
                            <div class="twm-img-bg-circle3-wrap">
                                <div class="twm-img-bg-circle3 rotate-center"><span></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Images & Graphics -->
                    <div class="lg:absolute top-0 right-0 z-12 pointer-events-none">
                        <div class="absolute top-32 right-[25%] w-[35%] xl:w-[50%] xl:right-[40%] max-lg:hidden">
                            <img src="<?php echo e(asset('img/Plane-With-Line.png')); ?>" alt="Plane with line" width="770"
                                height="291" loading="lazy">
                        </div>
                        <div class="relative lg:top-16 ml-auto xl:w-3/4 w-1/2 max-2xl:mr-12.5 max-lg:!mr-auto">
                            <img src="<?php echo e(asset('img/right-pic.png')); ?>" alt="Right picture" width="819"
                                height="702" loading="lazy">
                        </div>
                    </div>

                    <!-- Animated Clouds -->
                    <div class="absolute top-24 w-full z-10 overflow-hidden pointer-events-none">
                        <div class="inline-block whitespace-nowrap animate-moveCloud">
                            <img src="<?php echo e(asset('img/Cloud1.png')); ?>" alt="Cloud 1" width="168" height="131"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="absolute top-12 w-full z-10 overflow-hidden pointer-events-none">
                        <div class="inline-block whitespace-nowrap animate-moveCloud" style="animation-delay: 7s;">
                            <img src="<?php echo e(asset('img/Cloud2.png')); ?>" alt="Cloud 2" width="168" height="131"
                                loading="lazy">
                        </div>
                    </div>

                    <!-- Discount Badge -->
                    <div
                        class="lg:absolute xl:right-12.5 lg:right-5 lg:top-1/2 lg:-translate-y-1/2 text-white z-15 mt-8 lg:mt-0">
                        <span class="block font-light text-base xl:text-22 leading-6.5 italic rotate-[-15deg]">Get Up
                            To</span>
                        <span
                            class="block font-black text-5xl xl:text-82 leading-[0.75] italic rotate-[-15deg]">45%</span>
                        <span
                            class="block font-bold text-base xl:text-2xl leading-6 italic rotate-[-15deg] -mt-1.25 ml-7.5 capitalize">Discount</span>
                    </div>

                </div>
            </div>
        </div>
    </div><?php /**PATH C:\Users\rubay\Desktop\New folder\snapair-erp\resources\views/components/frontend/hero.blade.php ENDPATH**/ ?>