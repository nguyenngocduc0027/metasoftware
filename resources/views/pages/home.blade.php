@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/master-digital-agency.css">
@endpush

@section('content')
    <!-- intro area start  -->
    <section class="intro-area">
        <div class="container container-large">
            <div class="intro-grid">
                <div class="intro-info">
                    <h1 class="highlight-text has_fade_anim" data-fade-from="left">Xây dựng thiết kế
                        nổi bật & phát triển</h1>
                    <img class="arrow-button show-light" src="/assets/imgs/shape/img-s-2.webp" alt="arrow-button">
                    <div class="counter-box has_fade_anim" data-fade-from="left" data-delay="0.45">
                        <h2 class="counter-title">100+</h2>
                        <p class="text text-capitalize">khách hàng hài lòng về dịch vụ của chúng tôi
                        </p>
                        <img class="show-light" src="/assets/imgs/team/team-group.webp" alt="team-group">
                    </div>
                </div>
                <div class="intro-content">
                    <h2 class="intro-title has_char_anim" data-translateX="70">We Think <span class="small-hypen"></span>
                        & Solve.</h2>
                    <p class="text has_word_anim" data-delay="0.30">Chúng tôi tin chắc rằng thiết kế
                        không chỉ là những bức tranh đẹp, mà còn là một công cụ mạnh mẽ có thể thực sự
                        chuyển đổi hoạt động kinh doanh.</p>
                    <div class="btn-wrap has_fade_anim" data-fade-from="bottom" data-delay="0.45">
                        <a href="about.html" class="wc-btn wc-btn-primary btn-text-flip"><span
                                data-text="Tìm hiểu thêm">Tìm hiểu thêm</span></a>
                    </div>
                </div>
                <div class="intro-thumb">
                    <div class="main-thumb">
                        <img class="main-image" src="/assets/imgs/gallery/carousel-2.png" alt="intro-main-image">
                        <img class="shape-1 show-light" src="/assets/imgs/shape/img-r-1.webp" alt="shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro area end  -->

    <!-- about area start  -->
    <section class="about-area section-spacing">
        <div class="container">
            <div class="section-heading">
                <h2 class="section-title has_fade_anim">Tầm nhìn xa để thành công</h2>
                <p class="section-desc has_fade_anim">Từ những chiến dịch PR truyền thống, xây dựng uy
                    tín thương hiệu cho đến nghệ thuật kể chuyện và quản lý mạng xã hội sáng tạo – chúng
                    tôi đều làm chủ. Chúng tôi không chỉ đơn thuần là một nhà cung cấp dịch vụ theo yêu
                    cầu, mà là người đồng hành chiến lược. Chính vì vậy, nhiều tập đoàn và agency hàng
                    đầu thế giới đã tin tưởng lựa chọn chúng tôi, bởi họ biết rằng chuyên môn và sự tận
                    tâm của chúng tôi sẽ luôn mang lại giá trị vượt mong đợi.</p>
            </div>
            <div class="about-thumb has_fade_anim" data-fade-from="top" data-ease="bounce">
                <img class="show-light" src="/assets/imgs/gallery/img-r-2.webp" alt="circle-shape">
            </div>
        </div>
    </section>
    <!-- about area end  -->

    <!-- counter area start  -->
    <section class="counter-area">
        <div class="container">
            <div class="counter-area-inner-home section-spacing">
                <div class="counters-grid">
                    <div class="counter-item has_fade_anim" data-fade-from="left">
                        <h2 class="title wc-counter">25+</h2>
                        <p class="text">Dự án hoàn thiện</p>
                    </div>
                    <div class="counter-item has_fade_anim" data-fade-from="left">
                        <h2 class="title wc-counter">200+</h2>
                        <p class="text">Khách hàng hài lòng</p>
                    </div>
                    <div class="counter-item has_fade_anim" data-fade-from="left">
                        <h2 class="title wc-counter">5Y</h2>
                        <p class="text">Kinh nghệm làm việc</p>
                    </div>
                    <div class="counter-item has_fade_anim" data-fade-from="left">
                        <h2 class="title wc-counter">20+</h2>
                        <p class="text">Nhân sự tài năng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end  -->

    <!-- testimonial area start  -->
    <section class="testimonial-area">
        <div class="container">
            <div class="testimonial-area-inner section-spacing">
                <div class="section-heading">
                    <h2 class="section-title has_fade_anim">Phản hồi khách hàng</h2>
                </div>
                <div class="testimonial-inner has_fade_anim">
                    <div class="swiper testimonial-active">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <img src="/assets/imgs/icon/quote-2.webp" alt="quote">
                                        <p class="text limited-line-testimonial">Chúng tôi thật sự ấn
                                            tượng với website mới do
                                            công ty thực hiện. Giao diện hiện đại, thân thiện và dễ sử
                                            dụng,
                                            tốc độ tải nhanh và hoạt động ổn định trên mọi thiết bị. Đặc
                                            biệt, đội ngũ rất chuyên nghiệp, lắng nghe và thấu hiểu nhu
                                            cầu
                                            của chúng tôi, từ đó đưa ra giải pháp vượt mong đợi. Website
                                            không chỉ giúp thương hiệu của chúng tôi trở nên nổi bật hơn
                                            mà
                                            còn mang lại nhiều khách hàng tiềm năng. Chúng tôi hoàn toàn
                                            hài
                                            lòng và sẽ tiếp tục hợp tác lâu dài!</p>
                                        <div class="meta-home">
                                            <img src="/assets/imgs/client/img-s-1.webp" alt="">
                                            <div class="content">
                                                <h3 class="name">Charry Maron</h3>
                                                <p class="post">Developer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="testimonial-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end  -->

    <!-- service area start  -->
    <section class="service-area section-spacing">
        <div class="container">
            <div class="service-top-wrapper">
                <div class="section-heading">
                    <h2 class="section-title has_fade_anim">Dịch vụ đặc trưng của chúng tôi</h2>
                </div>
                <div class="content">
                    <p class="text has_fade_anim" data-fade-from="left">Chúng tôi kiến tạo bản sắc
                        thương hiệu, trải nghiệm số cuốn hút và chiến dịch marketing chiến lược để
                        thương hiệu của bạn vươn xa.</p>
                    <a href="services.html" class="wc-btn wc-btn-underline btn-text-flip has_fade_anim"
                        data-fade-from="left"><span data-text="Tìm hiểu thêm">Tìm hiểu thêm</span></a>
                </div>
            </div>
            <div class="services-wrapper-box">
                <div class="services-grid">
                    <div class="has_fade_anim" data-fade-from="bottom" data-delay="0.15">
                        <a href="service-details.html">
                            <div class="service-item">
                                <div class="icon">
                                    <img class="show-light" src="/assets/imgs/icon/icon-s-1.webp" alt="service-icon">
                                </div>
                                <h2 class="title">Web & App Hosting</h2>
                                <ul class="service-features">
                                    <li>Thiết kế Website</li>
                                    <li>Phát triển phần mềm</li>
                                    <li>Ứng dụng di động</li>
                                    <li>Hosting Website</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="has_fade_anim" data-fade-from="bottom" data-delay="0.30">
                        <a href="service-details.html">
                            <div class="service-item">
                                <div class="icon">
                                    <img class="show-light" src="/assets/imgs/icon/icon-s-2.webp" alt="service-icon">
                                </div>
                                <h2 class="title">Thiết kế thương hiệu</h2>
                                <ul class="service-features">
                                    <li>Thiết kế thương hiệu</li>
                                    <li>Thương hiệu số</li>
                                    <li>Ấn phẩm Marketing</li>
                                    <li>Tư vấn thương hiệu</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="has_fade_anim" data-fade-from="bottom" data-delay="0.45">
                        <a href="service-details.html">
                            <div class="service-item">
                                <div class="icon">
                                    <img class="show-light" src="/assets/imgs/icon/icon-s-3.webp" alt="service-icon">
                                </div>
                                <h2 class="title">Sáng tạo nội dung số</h2>
                                <ul class="service-features">
                                    <li>Quản trị Website</li>
                                    <li>Tối ưu Website</li>
                                    <li>Bải trì Website</li>
                                    <li>Sáng tạo nội dung</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="has_fade_anim" data-fade-from="bottom" data-delay="0.60">
                        <a href="service-details.html">
                            <div class="service-item">
                                <div class="icon">
                                    <img class="show-light" src="/assets/imgs/icon/icon-s-4.webp" alt="service-icon">
                                </div>
                                <h2 class="title">Dịch vụ doanh nghiệp</h2>
                                <ul class="service-features">
                                    <li>Đăng ký doanh nghiệp</li>
                                    <li>Thông báo Website</li>
                                    <li>Trực tư vấn Fanpage</li>
                                    <li>Xác minh Google Maps</li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service area end  -->

    <!-- awards area start  -->
    <section class="awards-area">
        <div class="area-bg">
            <img src="/assets/imgs/gallery/img-s-6.webp" alt="gallery image">
        </div>
        <div class="container">
            <div class="awards-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle has-right-line has_fade_anim"></span>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">Chúng tôi tin vào chất lượng hơn số
                                lượng</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="text-wrapper">
                        <p class="text has_fade_anim" data-fade-from="left">Tại MetaSoft, chúng tôi
                            tin rằng thành công không đến từ số lượng dự án, mà từ chất lượng trong từng
                            sản phẩm. Mỗi website hay phần mềm chúng tôi tạo ra đều được chăm chút tỉ
                            mỉ, từ giao diện đến trải nghiệm người dùng, nhằm mang lại giá trị thực sự
                            cho khách hàng. Chúng tôi không chạy theo số đông, mà tập trung vào sự hoàn
                            hảo, bền vững và hiệu quả lâu dài cho từng giải pháp công nghệ.
                        </p>
                    </div>
                    <div class="awards-list has_fade_anim">
                        <ul>
                            <li><img src="https://crowdytheme.com/html/arolax/assets/imgs/gallery/img-s-8.webp"
                                    alt="award image"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awards area end  -->

    <!-- client area start  -->
    <div class="client-area has_fade_anim">
        <div class="container">
            <div class="client-area-inner section-spacing-top">
                <div class="client-area-text">
                    <h2 class="text">Chúng tôi đã làm việc với một số thương hiệu</h2>
                </div>
                <div class="clients-wrapper-box">
                    <div class="clients-wrapper">
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-1.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-2.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-3.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-4.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-5.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-6.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-7.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-8.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-9.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-10.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-11.webp" alt="client image">
                        </div>
                        <div class="client-box">
                            <img class="show-light" src="/assets/imgs/brand/img-s-12.webp" alt="client image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client area end  -->

    <!-- blog area start  -->
    <section class="blog-area">
        <div class="container">
            <div class="blog-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">Blogs</h2>
                        </div>
                    </div>
                    <div class="btn-wrapper has_fade_anim" data-delay="0.30" data-fade-from="right">
                        <a href="javascript:void(0)" class="wc-btn wc-btn-underline btn-text-flip">
                            <span data-text="Đọc tất cả">Đọc tất cả</span></a>
                    </div>
                </div>
                <div class="blog-wrapper-box">
                    <div class="blog-wrapper">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="has_fade_anim" data-fade-from="bottom" data-delay="0.15">
                                <a href="blog-details.html">
                                    <article class="blog">
                                        <div class="thumb">
                                            <img src="/assets/imgs/blog/img-s-11.webp" alt="blog image">
                                        </div>
                                        <div class="content-wrapper">
                                            <div class="content">
                                                <h2 class="title limited-line-title-blog">Một bộ nhận diện thương hiệu
                                                    doanh nghiệp bao gồm những gì</h2>
                                                <div class="meta">
                                                    <span class="tag">Branding</span>
                                                    <span class="date has-left-line">14 tháng 8 2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog area end  -->

    <!-- cta area start  -->
    <section class="cta-area">
        <div class="container">
            <div class="cta-area-inner section-spacing">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title has_fade_anim">Hãy bắt đầu hành trình của bạn cùng chúng tôi -
                                MetaSoft</h2>
                        </div>
                    </div>
                    <div class="btn-wrapper has_fade_anim">
                        <a href="contact.html" class="wc-btn wc-btn-primary btn-text-flip"> <span
                                data-text="Liên lạc ngay!">Liên lạc ngay!</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end  -->
@endsection
