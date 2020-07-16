<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Skogkatt Photography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    {{-- Sidebar --}}
    <x-gallery.sidebar></x-gallery.sidebar>

    <main class="main-content">

      {{-- Main --}}
      <x-gallery.main></x-gallery.main>

      <div class="container-fluid">

        {{-- Gallery --}}
        <x-gallery.gallery></x-gallery.gallery>

        {{-- Testimonial --}}
        {{-- <x-gallery.testimonial></x-gallery.testimonial> --}}

        {{-- Biography --}}
        <x-gallery.biography></x-gallery.biography>

        {{-- Blog --}}
        <x-gallery.blog></x-gallery.blog>

        {{-- Contact --}}
        <x-gallery.contact></x-gallery.contact>

        {{-- Footer --}}
        {{-- <x-footer></x-footer> --}}

      </div>
    </main>

  </div> <!-- .site-wrap -->

  <x-gallery.script></x-gallery.script>

  </body>
</html>
