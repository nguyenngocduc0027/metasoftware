@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/master-career.css">
@endpush
@section('content')
    <!-- hero area start  -->
    <section class="hero-area">
        <div class="container">
            <div class="hero-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_fade_anim text-capitalize">mở khóa tương lai! bắt đầu sự
                                nghiệp tại MetaSoft
                            </h1>
                        </div>
                    </div>
                    <div class="text-box">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle has-right-line has_fade_anim text-black" data-fade-from="left"
                                data-delay="0.30">tuyển dụng</span>
                        </div>
                        <div class="text-wrapper">
                            <p class="text has_fade_anim" data-fade-from="left" data-delay="0.45">Chúng tôi nhìn nhận mọi
                                thứ từ nhiều góc độ, với đam mê lan tỏa những giá trị nhân văn phổ quát và mở rộng tiềm năng
                                cho tương lai.</p>
                        </div>
                    </div>
                    <div class="thumb overflow-hidden">
                        <img src="/assets/imgs/gallery/img-s-93.webp" data-speed="0.8" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end  -->

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

    <!-- roles area start  -->
    <section class="roles-area">
        <div class="container">
            <div class="roles-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim text-capitalize">chúng tôi hiện đang tuyển dụng</h2>
                        </div>
                    </div>
                </div>
                <div class="roles-wrapper-box">
                    <div class="roles-wrapper">
                        <div class="has_fade_anim">
                            <a href="{{ route('career-detail') }}">
                                <div class="role-item">
                                    <span class="serial">01</span>
                                    <h3 class="title">UI/UX Designer</h3>
                                    <p class="positions">(02 Open Roles)</p>
                                    <span class="icon">
                                        <img src="/assets/imgs/icon/plus-2-light.webp" alt="icon">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="{{ route('career-detail') }}">
                                <div class="role-item">
                                    <span class="serial">02</span>
                                    <h3 class="title">Frontend Developer</h3>
                                    <p class="positions">(05 Open Roles)</p>
                                    <span class="icon">
                                        <img src="/assets/imgs/icon/plus-2-light.webp" alt="icon">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="{{ route('career-detail') }}">
                                <div class="role-item">
                                    <span class="serial">03</span>
                                    <h3 class="title">Product Manager</h3>
                                    <p class="positions">(01 Open Roles)</p>
                                    <span class="icon">
                                        <img src="/assets/imgs/icon/plus-2-light.webp" alt="icon">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="{{ route('career-detail') }}">
                                <div class="role-item">
                                    <span class="serial">04</span>
                                    <h3 class="title">JavaScript Engineer</h3>
                                    <p class="positions">(03 Open Roles)</p>
                                    <span class="icon">
                                        <img src="/assets/imgs/icon/plus-2-light.webp" alt="icon">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="has_fade_anim">
                            <a href="{{ route('career-detail') }}">
                                <div class="role-item">
                                    <span class="serial">05</span>
                                    <h3 class="title">Joomla Developer</h3>
                                    <p class="positions">(03 Open Roles)</p>
                                    <span class="icon">
                                        <img src="/assets/imgs/icon/plus-2-light.webp" alt="icon">
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- roles area end  -->

    <!-- process area start  -->
    <section class="process-area">
        <div class="container">
            <div class="process-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">Vì sao bạn nên đồng hành cùng chúng tôi!</h2>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        <p class="text has_fade_anim">Chúng tôi tin vào thương hiệu đột phá và nhà sáng lập kiến tạo tương
                            lai.</p>
                    </div>
                </div>
                <div class="process-wrapper-box">
                    <div class="process-wrapper">
                        <div class="process-box has_fade_anim" data-delay="0.15">
                            <div class="thumb">
                                <img class="show-light" src="/assets/imgs/icon/icon-s-42.webp" alt="process icon">
                            </div>
                            <div class="content">
                                <h3 class="title text-uppercase">Đổi mới</h3>
                                <p class="text limited-line-4">Đổi mới để tiên phong, kiến tạo giải pháp đột phá.</p>
                            </div>
                        </div>
                        <div class="process-box has_fade_anim" data-delay="0.30">
                            <div class="thumb">
                                <img class="show-light" src="/assets/imgs/icon/icon-s-43.webp" alt="process icon">
                            </div>
                            <div class="content">
                                <h3 class="title text-uppercase">Hợp tác</h3>
                                <p class="text limited-line-4">Hợp tác đa góc nhìn – kiến tạo giá trị xuất sắc.</p>
                            </div>
                        </div>
                        <div class="process-box has_fade_anim" data-delay="0.45">
                            <div class="thumb">
                                <img class="show-light" src="/assets/imgs/icon/icon-s-44.webp" alt="process icon">
                            </div>
                            <div class="content">
                                <h3 class="title text-uppercase">thấu cảm</h3>
                                <p class="text limited-line-4">Thiết kế từ sự thấu cảm – chạm đến cảm xúc người dùng.</p>
                            </div>
                        </div>
                        <div class="process-box has_fade_anim" data-delay="0.15">
                            <div class="thumb">
                                <img class="show-light" src="/assets/imgs/icon/icon-s-45.webp" alt="process icon">
                            </div>
                            <div class="content">
                                <h3 class="title text-uppercase">xuất sắc</h3>
                                <p class="text limited-line-4">Xuất sắc trong từng chi tiết – khẳng định năng lực vượt trội.</p>
                            </div>
                        </div>
                        <div class="process-box has_fade_anim" data-delay="0.30">
                            <div class="thumb">
                                <img class="show-light" src="/assets/imgs/icon/icon-s-46.webp" alt="process icon">
                            </div>
                            <div class="content">
                                <h3 class="title text-uppercase">thích ứng</h3>
                                <p class="text limited-line-4">Linh hoạt thích ứng – vững vàng trước mọi thay đổi.</p>
                            </div>
                        </div>
                        <div class="process-box has_fade_anim" data-delay="0.45">
                            <div class="thumb">
                                <img class="show-light" src="/assets/imgs/icon/icon-s-47.webp" alt="process icon">
                            </div>
                            <div class="content">
                                <h3 class="title text-uppercase">trách nhiệm</h3>
                                <p class="text limited-line-4">Trách nhiệm tạo niềm tin – uy tín làm nên thành công.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process area end  -->
@endsection
