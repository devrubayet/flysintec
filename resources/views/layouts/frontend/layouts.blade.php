<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO Meta Tags -->
    <title>{{ $settings->meta_title ?? $settings->site_name ?? 'Travel ERP' }}</title>
    <meta name="description" content="{{ $settings->meta_description ?? $settings->site_tagline ?? '' }}" />
    <meta name="keywords" content="{{ $settings->meta_keywords ?? '' }}" />

    <!-- Open Graph / Social Share Image -->
    @if(!empty($settings->og_image))
        <meta property="og:image" content="{{ asset('storage/' . $settings->og_image) }}" />
    @endif

    <!-- Dynamic Favicon -->
    @if(!empty($settings->favicon))
        <link rel="icon" type="image/png" href="{{ asset('storage/' . $settings->favicon) }}">
    @else
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin-end/assets/favicon_io/favicon-16x16.png') }}">
    @endif

    <!-- External CSS Libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vite Assets (CSS & JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
        
    @stack('styles')
</head>

<body>
    <!-- Navbar Component -->
    <x-frontend.navbar />

    <!-- Main Content Yield -->
    @yield('content')

    <!-- Footer Component -->
    <x-frontend.footer />

    <!-- Swiper JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <!-- Stack for Page Specific Scripts -->
    @stack('scripts')
</body>

</html>