@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/master-blog.css">
@endpush
@section('content')
    <!-- featured area start  -->
    <section class="featured-area">
        <div class="container">
            <div class="featured-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_fade_anim">News - Blog</h1>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="text-wrapper">
                            <p class="text has_fade_anim">Add the best talent on the market, an agile skilled management &
                                seamless
                                involvement</p>
                        </div>
                        <div class="counter-box has_fade_anim">
                            <div class="counter-item">
                                <span class="number wc-counter">4,00 +</span>
                                <p class="text">Total post</p>
                            </div>
                            <div class="counter-item">
                                <span class="number wc-counter">99 +</span>
                                <p class="text">Blog writer</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- featured area end  -->

    <div class="featured-post-area">
        <div class="container">
            <div class="featured-post-box">
                <div class="featured-posts">
                    @for ($i = 1; $i < 4; $i++)
                        <article class="blog-box has_fade_anim" data-delay="{{ $i * 0.15 }}">
                            <a href="{{ route('blog-detail') }}">
                                <div class="thumb">
                                    <img src="/assets/imgs/blog/img-s-17.webp" alt="blog image">
                                </div>
                                <div class="content">
                                    <div class="content-first">
                                        <h2 class="title">Insights from Industry Leaders</h2>
                                        <span class="tag">Features Post <br>
                                            Mar - 2024</span>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <!-- blog area start  -->
    <section class="blog-area">
        <div class="container">
            <div class="blog-area-inner section-spacing">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">News - Blog mới nhất</h2>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim">Add the best talent on the market, an agile skilled management &
                            seamless
                            involvement</p>
                    </div>
                </div>
                <div class="blogs-wrapper-box">
                    <div class="blogs-wrapper has_fade_anim">
                        @for($i = 1; $i < 7; $i++)
                        <a href="{{ route('blog-detail')}}">
                            <div class="blog-box">
                                <div class="thumb">
                                    <img src="/assets/imgs/blog/img-s-20.webp"
                                        alt="image">
                                </div>
                                <div class="content">
                                    <span class="number">0{{$i}}</span>
                                    <h3 class="title limited-line-title-blog">Business consultation</h3>
                                    <span class="date">Mar - 2024</span>
                                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </a>
                        @endfor
                    </div>
                    <div class="pagination-box has_fade_anim">
                        <ul class="pagination">
                            <li>
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#">04</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end  -->
@endsection
