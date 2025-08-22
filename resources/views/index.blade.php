<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Metasoft Vietnam, a leading software development company in Vietnam. We specialize in custom software development, mobile app development, and website development.">
    <meta name="keywords"
        content="Metasoft Vietnam, software development, mobile app development, website development, brand design, graphic design, UI/UX design, web design, digital marketing, Hosting, Domain, SEO">

    <title>{{ config('app.name') }}</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="/assets/imgs/logo/favicon.png">

    <!-- All CSS files -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/progressbar.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">

    <link rel="stylesheet" href="/assets/css/master-digital-agency.css">

    <!-- Extra CSS -->
    @stack('styles')

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body class="font-heading-recoleta-medium">

    <!-- Preloader -->
    @include('components.preloader')

    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>

    <!-- Sroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>

    <!-- Header area start -->
    @include('components.header')
    <!-- Header area end -->

    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="body-wrapper digital-agencey">

                <!-- overlay switcher close  -->
                <div class="overlay-switcher-close"></div>

                <main>
                    @yield('content')
                </main>

                <!-- footer area start  -->
                @include('components.footer')
                <!-- footer area end  -->

            </div>
        </div>
    </div>

    <!-- All JS files -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/effect-carousel.min.js"></script>
    <script src="/assets/js/counter.js"></script>
    <script src="/assets/js/progressbar.js"></script>
    <script src="/assets/js/gsap.min.js"></script>
    <script src="/assets/js/ScrollSmoother.min.js"></script>
    <script src="/assets/js/ScrollToPlugin.min.js"></script>
    <script src="/assets/js/ScrollTrigger.min.js"></script>
    <script src="/assets/js/SplitText.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/backToTop.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/error-handling.js"></script>
    <script src="/assets/js/offcanvas.js"></script>

    <script>
        // client slider
        if ('.client-slider-active') {
            var client_slider_active = new Swiper(".client-slider-active", {
                slidesPerView: 'auto',
                loop: true,
                autoplay: true,
                spaceBetween: 130,
                speed: 3000,
                autoplay: {
                    delay: 1,
                },
            });
        }

        // testimonial slider
        if (('.testimonial-slider').length) {
            var testimonial_slider = new Swiper(".testimonial-slider", {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 60,
                speed: 1800,
                watchSlidesProgress: true,
                navigation: {
                    prevEl: ".testimonial-button-prev",
                    nextEl: ".testimonial-button-next",
                },
            });
        }

        // testimonial_active
        if ('.testimonial-active') {
            var testimonial_slider_active = new Swiper(".testimonial-active", {
                slidesPerView: 1,
                loop: false,
                autoplay: false,
                spaceBetween: 60,
                speed: 3000,
                pagination: {
                    el: '.testimonial-pagination',
                    type: 'bullets',
                    clickable: true,
                },
            });
        }
    </script>
    <script>
        // portrfolio active
        if ('.portfolio-active') {
            const swiper = new Swiper('.portfolio-active', {
                // pass EffectCarousel module to modules
                modules: [EffectCarousel],
                // specify "carousel" effect
                effect: 'carousel',
                // carousel effect parameters
                carouselEffect: {
                    // opacity change per side slide
                    opacityStep: 0.00,
                    // scale change per side slide
                    scaleStep: 0.2,
                    // amount of side slides visible, can be 1, 2 or 3
                    sideSlides: 5,
                },
                grabCursor: true,
                loop: true,
                loopAdditionalSlides: 1,
                slidesPerView: 'auto',
                navigation: {
                    nextEl: '.portfolio-button-next',
                    prevEl: '.portfolio-button-prev',
                },
                pagination: {
                    el: '.portfolio-pagination',
                },

                autoplay: {
                    delay: 3000,
                },
            });
        }
    </script>
</body>

</html>
