@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/master-works.css">
@endpush
@section('content')
    <!-- work area start  -->
    <section class="work-area">
        <div class="container">
            <div class="work-area-inner section-spacing-bottom">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_text_move_anim text-uppercase">Dự Án</h1>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim text-capitalize"> We take a similar approach to design commercial we do
                            impactfully
                            approache, over
                            the flowchart of user friendly wireframe.</p>
                    </div>
                    <div class="icon has_fade_anim">
                        <img class="show-light" src="/assets/imgs/shape/img-s-82.webp" alt="image">
                    </div>
                </div>
                <div class="works-wrapper-box">
                    <div class="works-wrapper">
                        @for ($i = 0; $i < 8; $i++)
                            <div class="has_fade_anim">
                                <a href="{{ route('project-detail') }}">
                                    <div class="work-box">
                                        <div class="thumb">
                                            <img src="/assets/imgs/works/img-s-12.webp" alt="work image">
                                        </div>
                                        <div class="content">
                                            <h3 class="title text-capitalize">Victoria kinko</h3>
                                            <div class="meta">
                                                <span class="tag text-capitalize">Design - 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work area end  -->
@endsection
