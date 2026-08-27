@extends('layouts.frontend.layouts')

@section('content')
    
    <!-- HEADER END -->

    <x-frontend.hero/>

    <!-- ═══════════════════════════════════════
     EASY STEPS FOR BOOKINGS
═══════════════════════════════════════ -->
   <x-frontend.booking-process/>

    <!-- ═══════════════════════════════════════
     TOP DESTINATIONS
═══════════════════════════════════════ -->
    <x-frontend.top-destination/>

    <!-- ═══════════════════════════════════════
     WE RECOMMEND BEAUTIFUL DESTINATIONS
    ═══════════════════════════════════════ -->
    <x-frontend.recommended-section/>

    <!-- ═══════════════════════════════════════
     CULTURAL TOURS
═══════════════════════════════════════ -->
    <x-frontend.cultural-tour-section/>

    <!-- ═══════════════════════════════════════
     TOUR CATEGORIES BANNER
═══════════════════════════════════════ -->
    <x-frontend.tour-categories-banner/>

    <!-- ═══════════════════════════════════════
     MEET WITH TOUR GUIDE
═══════════════════════════════════════ -->
    <x-frontend.tour-guide-section/>

    <!-- ═══════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════ -->
    <x-frontend.testominal-section/>
    <!-- ═══════════════════════════════════════
     FOOTER
═══════════════════════════════════════ -->
    


@endsection
