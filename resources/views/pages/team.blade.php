@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/master-team.css">
@endpush
@section('content')
    <!-- hero area start  -->
    <section class="hero-area">
        <div class="container large">
            <div class="hero-area-inner">
                <div class="section-content">
                    <div class="btn-wrapper has_fade_anim" data-fade-from="left">
                        <a href="{{ route('career') }}" class="wc-btn wc-btn-underline text-capitalize">Muốn chinh phục mọi khách hàng
                            và nâng tầm sự nghiệp?<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="content-last">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h1 class="section-title large has_text_move_anim text-uppercase">Cùng nhau hướng tới thành
                                    công.</h1>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="text has_fade_anim" data-fade-from="left">MetaSoft là ngọn hải đăng của những đổi mới
                                xuất sắc, đồng thời là công ty mẹ năng động của La Cantina và nhiều công ty con khác.</p>
                        </div>
                        <div class="fun-fact has_fade_anim" data-fade-from="bottom">
                            <span class="number wc-counter">400 +</span>
                            <p class="text text-capitalize">Khách hàng hài lòng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="image-wrapper">
        <div class="container large">
            <div class="p-relative">
                <div class="experience has_fade_anim" data-fade-from="top" data-ease="bounce">
                    <h2 class="number wc-counter">25+</h2>
                    <h2 class="text text-capitalize">Nhân sự tài năng</h2>
                </div>
            </div>
        </div>
        <img class="w-100 has_fade_anim" data-on-scroll="0" src="/assets/imgs/gallery/img-s-104.webp" alt="image">
    </div>
    <!-- hero area end  -->

    <!-- team area start  -->
    <section class="team-area">
        <div class="container">
            <div class="team-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_text_move_anim text-capitalize">nhân sự đam mê và chuyên môn của
                                chúng tôi!</h2>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim">Chúng tôi đặt niềm tin vào những nhân sự của mình. Họ là mắt xích quan
                            trọng không thể thiếu. Tài năng và đam mê của họ là những điều thiết yếu đưa chúng tôi đến với
                            thành công!
                        </p>
                    </div>
                </div>
                <div class="team-wrapper-box">
                    <div class="team-wrapper">
                        @for ($i = 1; $i < 9; $i++)
                            <div class="team-box has_fade_anim" data-delay="{{ $i * 0.15 }}">
                            <a href="{{ route('team-detail') }}">
                                <div class="thumb">
                                    <img src="/assets/imgs/team/img-s-1.webp"
                                        alt="team icon">
                                </div>
                                <div class="content">
                                    <h3 class="title">Kamal Abraham</h3>
                                    <p class="text">CEO, Wealcoder</p>
                                </div>
                            </a>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team area end  -->


    <!-- counter area start  -->
    <div class="counter-area">
        <div class="counter-area-inner">
            <div class="thumb">
                <img src="/assets/imgs/gallery/img-s-27.webp" alt="image">
            </div>
            <div class="counter-wrapper-box">
                <div class="counter-wrapper">
                    <div class="thumb overflow-hidden">
                        <img src="/assets/imgs/gallery/img-s-28.webp" data-speed="0.9" alt="image">
                    </div>
                    <div class="counter-box">
                        <h2 class="text has_fade_anim">Chúng tôi có hơn 100+ khách hàng hài lòng</h2>
                        <h2 class="number wc-counter has_fade_anim">100+</h2>
                    </div>
                    <div class="counter-box dark">
                        <h2 class="text has_fade_anim">Hơn 25+ dự án hoàn hảo đã bàn giao</h2>
                        <h2 class="number wc-counter has_fade_anim">25+</h2>
                    </div>
                    <div class="thumb overflow-hidden">
                        <img src="/assets/imgs/gallery/img-s-29.webp" data-speed="0.9" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end  -->

    <!-- community area start  -->
    <section class="community-area">
        <div class="container">
            <div class="community-area-inner section-spacing">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim text-uppercase">Tương lai . Cộng đồng . Danh dự</h2>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim">Chúng tôi khác biệt bởi niềm đam mê chung trong việc giải quyết thách
                            thức kinh doanh bằng chiến lược, thiết kế và công nghệ. Sức mạnh của chúng tôi đến từ đội ngũ –
                            những góc nhìn độc đáo, năng lực chuyên môn và sự hợp tác chặt chẽ từ ý tưởng đến triển khai.
                        </p>
                    </div>
                    <div class="gallery-wrapper-box has_fade_anim">
                        <div class="gallery-wrapper">
                            <div class="">
                                <div class="thumb">
                                    <img src="/assets/imgs/gallery/img-s-94.webp" alt="image">
                                </div>
                            </div>
                            <div class="">
                                <div class="thumb">
                                    <img src="/assets/imgs/gallery/img-s-95.webp" alt="image">
                                </div>
                            </div>
                            <div class="">
                                <div class="thumb">
                                    <img src="/assets/imgs/gallery/img-s-96.webp" alt="image">
                                </div>
                                <div class="thumb">
                                    <img src="/assets/imgs/gallery/img-s-97.webp" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- community area end  -->
@endsection
