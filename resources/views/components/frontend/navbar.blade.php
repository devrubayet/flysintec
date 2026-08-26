<!-- ═══════════════════════════════════════
     STICKY NAVBAR
═══════════════════════════════════════ -->
<!-- HEADER START -->
<header
    class="site-header sticky-header absolute lg:left-8.75 lg:right-8.75 lg:top-8.75 left-0 right-0 top-0 duration-500 z-999 [.site-header.is-fixed]:fixed [.site-header.is-fixed]:animate-header-scroll-animation [.site-header.is-fixed]:bg-primary [.site-header.is-fixed]:rounded-b-3xl [.site-header.is-fixed]:top-0">
    <div class="main-bar-wraper">
        <div
            class="w-full lg:min-h-30 min-h-20 lg:ps-8.75 px-4 lg:pe-13.75 duration-500 rounded-5xl flex items-center justify-between">
            <div class="flex relative w-full">
                <div class="flex items-center relative z-9 h-20 lg:w-44 w-30">
                    <!-- Logo -->
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('storage/' . ($settings?->logo ?? '')) }}" class="h-20"
                            alt="{{ $settings?->site_name ?? 'Logo' }}" />
                    </a>
                </div>
                <button id="mobile-toggle"
                    class="xmenu-toggler lg:hidden float-right mt-4.5 mb-4 md:ml-7 ml-4 size-11 bg-dark-600 relative cursor-pointer max-lg:order-1"
                    type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
                    <span class="block absolute left-2.5 h-0.5 rounded-px bg-white duration-300 top-3.25 w-5.5"></span>
                    <span class="block absolute left-2.5 h-0.5 rounded-px bg-white duration-0 top-5.5 w-6.25"></span>
                    <span class="block absolute left-2.5 h-0.5 rounded-px bg-white duration-300 top-8 w-4"></span>
                </button>
                <div
                    class="lg:hidden fixed top-0 left-0 bg-black size-full duration-300 z-999 opacity-0 visible pointer-events-none menu-close fade-overlay">
                </div>
                <div
                    class="flex lg:justify-center lg:basis-auto lg:grow max-lg:flex-col justify-start text-white font-base max-lg:fixed max-lg:h-screen max-lg:px-5 max-lg:top-0 max-lg:-left-75 max-lg:z-9999 max-lg:bg-indigo-950 dark:max-lg:bg-dark max-lg:w-72 max-lg:overflow-auto max-lg:duration-700 header-nav custom-scroll">
                    <div class="flex items-center relative z-9 py-6.25 lg:hidden">
                        <!-- Logo -->
                        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                            <img src="{{ asset('storage/' . ($settings?->logo ?? '')) }}" class="h-20"
                                alt="{{ $settings?->site_name ?? 'Logo' }}" />
                        </a>
                    </div>
                    <ul class="lg:flex text-white flex-wrap navbar-nav">
                        <li
                            class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 dark:max-lg:border-white/10 relative group">
                            <a class="lg:py-7.5 py-2 xl:px-5 lg:px-2 relative lg:inline-block block text-lg font-medium lg:text-white text-heading hover:text-secondary after:ml-1 after:-mt-1 after:inline-block after:size-2.5 after:bg-arrow-down after:bg-no-repeat after:bg-bottom max-lg:after:hidden"
                                href="index.html">
                                <span class="inline-block">Home</span>
                                <i
                                    class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 text-center text-xs bg-black text-white float-end"></i>
                            </a>

                        </li>
                        <li
                            class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 dark:max-lg:border-white/10 relative group">
                            <a class="lg:py-7.5 py-2 xl:px-5 lg:px-2 relative lg:inline-block block text-lg font-medium lg:text-white text-heading hover:text-secondary"
                                href="about-1.html">
                                <span class="inline-block">About</span>
                            </a>
                        </li>
                        <li
                            class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 dark:max-lg:border-white/10 relative group">
                            <a class="lg:py-7.5 py-2 xl:px-5 lg:px-2 relative lg:inline-block block text-lg font-medium lg:text-white text-heading hover:text-secondary after:ml-1 after:-mt-1 after:inline-block after:size-2.5 after:bg-arrow-down after:bg-no-repeat after:bg-bottom max-lg:after:hidden"
                                href="pages.html">
                                <span class="inline-block">Pages</span>
                                <i
                                    class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 text-center text-xs bg-black text-white float-end"></i>
                            </a>
                            <ul
                                class="lg:absolute bg-white dark:bg-dark lg:rounded-xxl block lg:left-0 max-lg:ps-3.75 w-full lg:w-55 lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden sub-menu">
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="services.html">
                                        <span>Services</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="service-detail.html">
                                        <span>Services Detail</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="gallery.html">
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="testimonial.html">
                                        <span>Testimonial</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="testimonial-detail.html">
                                        <span>Testimonial Detail</span>
                                    </a>
                                </li>
                                <li
                                    class="group/second relative border-b border-black/5 dark:border-white/10 sub-menu-down">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25 after:content-['\f054'] after:inline-block after:font-black after:font-['Font_Awesome_5_Free'] after:text-tiny after:float-right after:duration-500 max-lg:after:size-7 max-lg:after:leading-7 max-lg:after:text-center max-lg:after:text-xs max-lg:after:bg-black max-lg:after:text-white"
                                        href="our-team.html">
                                        <span>Tour Guide</span>
                                    </a>
                                    <ul
                                        class="bg-white dark:bg-dark lg:w-55 2xl:left-55 lg:-left-55 lg:top-0 lg:absolute lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover/second:opacity-100 lg:group-hover/second:visible lg:group-hover/second:translate-y-0 max-lg:hidden max-lg:pl-5 sub-menu">
                                        <li class="relative border-b border-black/5 dark:border-white/10">
                                            <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                                href="our-team.html">
                                                <span>Tour Guide</span>
                                            </a>
                                        </li>
                                        <li class="relative border-b border-black/5 dark:border-white/10">
                                            <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                                href="our-team-detail.html">
                                                <span>Tour Guide Detail</span>
                                            </a>
                                        </li>
                                        <li class="relative border-b border-black/5 dark:border-white/10">
                                            <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                                href="tour-package.html">
                                                <span>Tour Package</span>
                                            </a>
                                        </li>
                                        <li class="relative border-b border-black/5 dark:border-white/10">
                                            <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                                href="tour-package-detail.html">
                                                <span>Tour Package Detail</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="faq.html">
                                        <span>Faq</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="pricing.html">
                                        <span>Pricing</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="error-404.html">
                                        <span>Error-404</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="compare.html">
                                        <span>Compare</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="coming-soon.html">
                                        <span>Coming Soon</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="under-maintenance.html">
                                        <span>Under Maintenance</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 dark:max-lg:border-white/10 relative group">
                            <a class="lg:py-7.5 py-2 xl:px-5 lg:px-2 relative lg:inline-block block text-lg font-medium lg:text-white text-heading hover:text-secondary after:ml-1 after:-mt-1 after:inline-block after:size-2.5 after:bg-arrow-down after:bg-no-repeat after:bg-bottom max-lg:after:hidden"
                                href="destination-1-grid.html">
                                <span class="inline-block">Destinations</span>
                                <i
                                    class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 text-center text-xs bg-black text-white float-end"></i>
                            </a>
                            <ul
                                class="lg:absolute bg-white dark:bg-dark lg:rounded-xxl block lg:left-0 max-lg:ps-3.75 w-full lg:w-55 lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden sub-menu">
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="destination-1-grid.html">
                                        <span>Destinations 1 Grid</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="destination-1-left.html">
                                        <span>Destinations 1 Grid Left</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="destination-2-grid.html">
                                        <span>Destinations 2 Grid</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="destination-2-left.html">
                                        <span>Destinations 2 Grid Left</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="destination-3-grid.html">
                                        <span>Destinations 3 Grid</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="destination-3-left.html">
                                        <span>Destinations 3 Grid Left</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="destination-detail.html">
                                        <span>Destinations Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 dark:max-lg:border-white/10 relative group">
                            <a class="lg:py-7.5 py-2 xl:px-5 lg:px-2 relative lg:inline-block block text-lg font-medium lg:text-white text-heading hover:text-secondary after:ml-1 after:-mt-1 after:inline-block after:size-2.5 after:bg-arrow-down after:bg-no-repeat after:bg-bottom max-lg:after:hidden"
                                href="tours.html">
                                <span class="inline-block">Tours</span>
                                <i
                                    class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 text-center text-xs bg-black text-white float-end"></i>
                            </a>
                            <ul
                                class="lg:absolute bg-white dark:bg-dark lg:rounded-xxl block lg:left-0 max-lg:ps-3.75 w-full lg:w-55 lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden sub-menu">
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-list-style.html">
                                        <span>Tours List Style</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-1-grid.html">
                                        <span>Tours 1 Grid</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-1-grid-right.html">
                                        <span>Tours 1 Grid Right</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-2-grid.html">
                                        <span>Tours 2 Grid</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-2-grid-right.html">
                                        <span>Tours 2 Grid Right</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-3-grid.html">
                                        <span>Tours 3 Grid</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-3-grid-right.html">
                                        <span>Tours 3 Grid Right</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="tour-detail.html">
                                        <span>Tours Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 dark:max-lg:border-white/10 relative group">
                            <a class="lg:py-7.5 py-2 xl:px-5 lg:px-2 relative lg:inline-block block text-lg font-medium lg:text-white text-heading hover:text-secondary after:ml-1 after:-mt-1 after:inline-block after:size-2.5 after:bg-arrow-down after:bg-no-repeat after:bg-bottom max-lg:after:hidden"
                                href="blogs.html">
                                <span class="inline-block">Blogs</span>
                                <i
                                    class="fas fa-chevron-right lg:!hidden !block size-7 !leading-7 text-center text-xs bg-black text-white float-end"></i>
                            </a>
                            <ul
                                class="lg:absolute bg-white dark:bg-dark lg:rounded-xxl block lg:left-0 max-lg:ps-3.75 w-full lg:w-55 lg:opacity-0 lg:invisible lg:translate-y-10 z-10 mt-0 text-left duration-500 lg:group-hover:opacity-100 lg:group-hover:visible lg:group-hover:translate-y-0 max-lg:hidden sub-menu">
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="blog-grid.html">
                                        <span>Blog Grid</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="blog-grid-left.html">
                                        <span>Blog Grid Left</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="blog-list-left.html">
                                        <span>Blog List</span>
                                    </a>
                                </li>
                                <li class="relative border-b border-black/5 dark:border-white/10">
                                    <a class="block relative text-sm text-heading font-semibold py-3 lg:px-5 duration-500 hover:text-primary dark:hover:text-paleaqua hover:pl-6.25"
                                        href="blog-detail.html">
                                        <span>Blog Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="lg:inline-block block max-lg:border-b max-lg:border-gray-200 dark:max-lg:border-white/10 relative group">
                            <a class="lg:py-7.5 py-2 xl:px-5 lg:px-2 relative lg:inline-block block text-lg font-medium lg:text-white text-heading hover:text-secondary"
                                href="contact.html">
                                <span class="inline-block">Contact</span>
                            </a>
                        </li>
                    </ul>
                    <div class="lg:hidden block max-lg:p-5 text-center mt-auto">
                        <ul>
                            <li class="inline-block mx-0.5">
                                <a class="size-10 leading-10! border border-black/10 dark:border-white/10 text-center text-heading fab fa-facebook-f"
                                    target="_blank" href="https://www.facebook.com/dexignzone"></a>
                            </li>
                            <li class="inline-block mx-0.5">
                                <a class="size-10 leading-10! border border-black/10 dark:border-white/10 text-center text-heading fab fa-twitter"
                                    target="_blank" href="https://twitter.com/dexignzones"></a>
                            </li>
                            <li class="inline-block mx-0.5">
                                <a class="size-10 leading-10! border border-black/10 dark:border-white/10 text-center text-heading fab fa-linkedin-in"
                                    target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a>
                            </li>
                            <li class="inline-block mx-0.5">
                                <a class="size-10 leading-10! border border-black/10 dark:border-white/10 text-center text-heading fab fa-instagram"
                                    target="_blank" href="https://www.instagram.com/dexignzone/"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex lg:justify-end lg:items-center z-9 h-20 xl:pl-8 max-lg:ms-auto">
                    <div class="flex items-center">
                        <ul class="ml-5 flex items-center -mr-2.5">
                            <!-- আপনার মূল HTML ফাইলের <html> ট্যাগটি দেখতে এমন হওয়া উচিত: -->
<!-- <html lang="en" class="light"> -->

<li class="inline-block">
    <button type="button" class="relative flex items-center justify-center size-14 px-4 text-white theme-btn cursor-pointer">
        <!-- Light Mode Icon (Moon) -->
        <span class="absolute inset-0 z-2 hidden items-center justify-center in-[html.light_&]:flex">
            <svg fill="#fff" id="fi_2253259" enable-background="new 0 0 100 100" height="21" viewBox="0 0 100 100" width="21" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="m54.2 100c-10.8 0-21.6-3.6-30.4-10.3-11.8-8.8-19-22.7-19.6-37.6-1-18 8.8-35.5 24.2-44.8 8.8-5.2 18.6-7.8 28.9-7.2 2.6 0 5.2 2.1 5.7 4.1 1 2.6.5 5.2-1.5 7.2-8.2 8.2-11.3 19.6-9.3 30.9 3.6 16.5 19.1 27.8 36.1 26.3 2.6 0 5.2 1 6.7 3.6 1.5 2.1 1 5.2-.5 7.2-7.2 9.8-18 17-29.9 19.6-3.2.5-6.8 1-10.4 1zm-5.1-89.1c-5.2.5-10.3 2.6-15.5 5.7-12.4 7.2-19.6 21.1-19.1 35 .5 11.8 6.2 22.7 15.5 29.9s21.1 9.8 32.5 7.2c7.2-1.5 13.4-4.6 18.5-9.8-18.5-1.5-34.5-15.5-39.1-34.5-2.1-11.4.5-23.7 7.2-33.5z"></path>
                </g>
            </svg>
        </span>
        
        <!-- Dark Mode Icon (Sun) -->
        <span class="absolute inset-0 z-2 hidden items-center justify-center in-[html.dark_&]:flex">
            <svg fill="white" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" id="fi_3570489">
                <path d="m12 18a6 6 0 1 0 -6-6 6.006 6.006 0 0 0 6 6zm0-10a4 4 0 1 1 -4 4 4 4 0 0 1 4-4z"></path>
                <path d="m12 4a1 1 0 0 0 1-1v-1a1 1 0 0 0 -2 0v1a1 1 0 0 0 1 1z"></path>
                <path d="m11 21v1a1 1 0 0 0 2 0v-1a1 1 0 0 0 -2 0z"></path>
                <path d="m18.364 6.636a1 1 0 0 0 .707-.293l.707-.707a1 1 0 0 0 -1.414-1.414l-.707.707a1 1 0 0 0 .707 1.707z"></path>
                <path d="m4.929 17.657-.707.707a1 1 0 1 0 1.414 1.414l.707-.707a1 1 0 0 0 -1.414-1.414z"></path>
                <path d="m22 11h-1a1 1 0 0 0 0 2h1a1 1 0 0 0 0-2z"></path>
                <path d="m2 13h1a1 1 0 0 0 0-2h-1a1 1 0 0 0 0 2z"></path>
                <path d="m17.657 17.657a1 1 0 0 0 0 1.414l.707.707a1 1 0 0 0 1.414-1.414l-.707-.707a1 1 0 0 0 -1.414 0z"></path>
                <path d="m4.929 6.343a1 1 0 0 0 1.414-1.414l-.707-.707a1 1 0 0 0 -1.414 1.414z"></path>
            </svg>
        </span>
    </button>
</li>
                           <li class="inline-block relative">
    <!-- আপনার সার্চ বাটন -->
    <button type="button" aria-label="Open search" data-target=""
        aria-expanded="false" aria-controls="searchOverlay1"
        class="flex items-center justify-center size-14 px-4 quick-search cursor-pointer text-white relative z-10">
        <i class="fa fa-search text-xl" aria-hidden="true"></i>
    </button>

    <!-- আইকন থেকে বাম দিকে বের হওয়ার অ্যানিমেটেড সার্চ ফর্ম -->
    <div id="searchOverlay1" 
        class="absolute right-0 top-1/2 -translate-y-1/2 w-0 overflow-hidden bg-white dark:bg-gray-900 shadow-xl rounded-full px-0 py-1 transition-all duration-400 ease-in-out z-0 flex items-center border border-transparent dark:border-gray-800">
        <form action="#" method="GET" class="flex items-center w-full px-2">
            <input type="text" placeholder="সার্চ করুন..." 
                class="w-full bg-transparent text-sm text-gray-800 dark:text-white px-3 py-1.5 focus:outline-none whitespace-nowrap">
            <button type="submit" class="text-blue-600 dark:text-blue-400 px-2 hover:opacity-80 transition">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>
    </div>
</li>
                            <!-- Trigger Button / Li -->
                            <li class="inline-block" data-drawer-target="offcanvas-right"
                                data-drawer-placement="right">
                                <button
                                    class="lg:mt-4.5 lg:mb-4 lg:ml-5 lg:size-11 bg-dark-600 relative cursor-pointer max-lg:order-1 max-md:ms-auto toggle-nav-btn"
                                    type="button" aria-label="Open information drawer" aria-expanded="false"
                                    aria-controls="offcanvas-right">
                                    <span
                                        class="block absolute left-2.5 h-0.5 rounded-px bg-white duration-300 top-3.25 w-7 max-lg:hidden"></span>
                                    <span
                                        class="block absolute left-2.5 h-0.5 rounded-px bg-white duration-0 top-5.5 w-7 max-lg:hidden"></span>
                                    <span
                                        class="block absolute left-2.5 h-0.5 rounded-px bg-white duration-300 top-8 w-7 max-lg:hidden"></span>
                                    <b
                                        class="lg:hidden uppercase fixed -rotate-90 -translate-y-1/2 -right-7.5 bg-indigo-900 px-5 rounded-t-lg text-white tracking-[2px] top-1/2">Info</b>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="fixed -top-full left-0 size-full bg-body-bg z-999 flex items-center justify-center p-8 duration-500 xmenu-search"
                    id="searchOverlay1">
                    <form
                        class="absolute top-1/2 left-1/2 -translate-1/2 w-[calc(100%_-_80px)] max-w-150 text-primary text-3xl font-light text-left outline-none p-1.5 duration-500 bg-light rounded-25xl"
                        action="#">
                        <div
                            class="relative flex flex-wrap items-stretch w-full bg-white rounded-25xl overflow-hidden">
                            <input name="search" value="" type="text"
                                class="h-17.5 pr-3 pl-7.5 text-lg text-primary w-[1%] flex-1 outline-none duration-300 placeholder:text-primary focus:border-primary"
                                placeholder="Search...">
                            <span class="flex">
                                <button type="button" aria-label="Submit search"
                                    class="px-2.5 outline-none size-17.5 bg-primary text-2xl text-white rounded-full flex-1 ml-2.5 duration-500 cursor-pointer">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <button type="button" aria-label="Close search"
                        class="absolute right-8 top-8 text-primary bg-citrusyellow text-base size-10 cursor-pointer rounded search-remove">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
  // ওয়েবসাইট লোড হওয়ার সময় থিম সেট করা
document.addEventListener("DOMContentLoaded", () => {
    const htmlElement = document.documentElement;
    const savedTheme = localStorage.getItem("theme") || "light"; // ডিফল্ট লাইট মোড ধরলাম
    
    htmlElement.classList.remove("light", "dark");
    htmlElement.classList.add(savedTheme);

    // বাটনে ক্লিক ইভেন্ট যোগ করা
    const themeButton = document.querySelector("button.theme-btn");
    if (themeButton) {
        themeButton.addEventListener("click", () => {
            if (htmlElement.classList.contains("dark")) {
                htmlElement.classList.remove("dark");
                htmlElement.classList.add("light");
                localStorage.setItem("theme", "light");
            } else {
                htmlElement.classList.remove("light");
                htmlElement.classList.add("dark");
                localStorage.setItem("theme", "dark");
            }
        });
    }
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const searchBtn = document.querySelector("button.quick-search");
    const searchOverlay = document.getElementById("searchOverlay1");

    if (searchBtn && searchOverlay) {
        searchBtn.addEventListener("click", (event) => {
            event.stopPropagation();
            
            const isExpanded = searchBtn.getAttribute("aria-expanded") === "true";
            searchBtn.setAttribute("aria-expanded", !isExpanded);
            
            
            // উইথ টগল করার অ্যানিমেশন (আইকন থেকে বাম দিকে বড় হবে)
            if (searchOverlay.classList.contains("w-0")) {
                searchOverlay.classList.remove("w-0", "px-0", "border-transparent");
                searchOverlay.classList.add("w-72", "px-2", "border-gray-200","z-100"); // ফর্মের সাইজ 72 দেওয়া হয়েছে, প্রয়োজনে বাড়াতে বা কমাতে পারেন
                // ইনপুটে অটো ফোকাস করার জন্য
                setTimeout(() => {
                    searchOverlay.querySelector("input").focus();
                }, 200);
            } else {
                searchOverlay.classList.remove("w-72", "px-2", "border-gray-200");
                searchOverlay.classList.add("w-0", "px-0", "border-transparent");
            }
        });

        // ফর্মের ভেতরে ক্লিক করলে যেন বন্ধ না হয়ে যায়
        searchOverlay.addEventListener("click", (event) => {
            event.stopPropagation();
        });

        // বাইরে ক্লিক করলে ফর্ম বন্ধ হয়ে যাবে
        document.addEventListener("click", () => {
            if (!searchOverlay.classList.contains("w-0")) {
                searchOverlay.classList.remove("w-72", "px-2", "border-gray-200");
                searchOverlay.classList.add("w-0", "px-0", "border-transparent");
                searchBtn.setAttribute("aria-expanded", "false");
            }
        });
    }
});
</script>