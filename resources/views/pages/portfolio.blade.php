@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/effect-carousel.min.css">
    <link rel="stylesheet" href="/assets/css/master-portfolio-carousel.css">
@endpush
@section('content')
    <!-- portfolio area start  -->
    <section class="portfolio-area">
        <div class="container large">
            <div class="portfolio-area-inner">
                <div id="app" class="portfolio-slider">
                    <!-- Carousel slider -->
                    <div class="swiper portfolio-active">
                        <div class="swiper-wrapper">
                            @for ($i = 2; $i <= 6; $i++)
                                <div class="swiper-slide">
                                    <div class="swiper-carousel-animate-opacity">
                                        <img src="/assets/imgs/project/img-s-1{{ $i }}.webp"
                                            alt="image">
                                        <div class="slide-content">
                                            <h2 class="title text-uppercase">portfolio {{ $i-1 }}</h2>
                                            <span class="tag text-uppercase">tag {{ $i-1 }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="slider-nav overflow-hidden">
                        <div class="portfolio-button-prev nav-icon has_fade_anim" data-fade-from="left" data-on-scroll="0"
                            data-delay="0.30">
                            <i class="fa-solid fa-angle-left"></i>Prev
                        </div>
                        <div class="portfolio-button-next nav-icon has_fade_anim" data-fade-from="right" data-on-scroll="0"
                            data-delay="0.30">
                            Next<i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                    <div class="portfolio-pagination has_fade_anim" data-fade-from="bottom" data-fade-offset="0"
                        data-on-scroll="0" data-delay="0.45"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area end  -->
@endsection
