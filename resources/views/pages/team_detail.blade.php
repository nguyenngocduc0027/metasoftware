@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/master-team-details.css">
@endpush
@section('content')
    <!-- team details area start  -->
    <section class="team-details-area">
        <div class="container">
            <div class="team-details-area-inner section-spacing-bottom">
                <div class="section-content">
                    <div class="team-thumb has_fade_anim" data-fade-from="left">
                        <div class="shape-1">
                            <img class="show-light" src="/assets/imgs/shape/img-s-86.webp"
                                alt="shape">
                        </div>
                        <img class="main-image" src="/assets/imgs/team/img-s-34.webp"
                            alt="image">
                    </div>
                    <div class="content-last">
                        <div class="section-header">
                            <div class="section-title-wrapper">
                                <div class="title-wrapper">
                                    <h1 class="name section-title large has_fade_anim text-capitalize">Quiver Kydrian</h1>
                                </div>
                            </div>
                            <div class="subtitle-wrapper">
                                <span class="designation section-subtitle has_fade_anim text-capitalize">Senior Developer</span>
                            </div>
                            <div class="text-wrapper">
                                <p class="text has_fade_anim">Jassica Oliver is known for her ability to take a creative
                                    brief
                                    and run with it
                                    on digital design to long-format layouts, she blend’s beautiful have intuitive with all
                                    while
                                    maintaining a can do zen attitude that keeps the whole statement on team centered.</p>
                                <p class="text has_fade_anim">When he’s not building strong alliances with other creatives,
                                    project managers
                                    and stakeholders alike, you’ll find him giving voice to client strategies with key
                                    compelling
                                    concept delightfully clever messaging.</p>
                            </div>
                            <div class="meta-wrapper has_fade_anim" data-on-scroll="0">
                                <span class="title">Portfolio :</span>
                                <div class="portfolio-list-wrappper">
                                    <div class="portfolio-list">
                                        <a href="#">Behance</a>
                                        <a href="#">Dribbble</a>
                                        <a href="#">Meduim</a>
                                    </div>
                                </div>
                            </div>
                            <div class="meta-wrapper has_fade_anim" data-on-scroll="0">
                                <span class="title">Follow :</span>
                                <div class="social-links-wrappper">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team details area end  -->
@endsection
