<!-- offcanvas start  -->
<div class="offcanvas-3__area">
    <div class="offcanvas-3__inner">
        <!-- Tablet -->
        <div class="offcanvas-3__meta-wrapper">
            <div class="">
                <button id="close_offcanvas" class="close-button close-offcanvas" onclick="hideCanvas3()">
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="">
                <div class="offcanvas-3__meta mb-145 d-none d-md-block">
                    <ul>
                        <li><a href="tel:+2-352698102" class="unnerline"><u>+84-854 980 968</u></a></li>
                        <li><a href="mailto:contact@me.com">metasoftvietnam@gmail.com</a></li>
                        <li><a href="#">216 Hoàng Mai, <br>
                                Tương Mai, Hoàng Mai, HN</a></li>
                    </ul>
                </div>
                <div class="offcanvas-3__social d-none d-md-block">
                    <p class="title">Follow Me</p>
                    <div class="offcanvas-3__social-links">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile & Tablet -->
        <div class="offcanvas-3__menu-wrapper">
            <nav class="nav-menu offcanvas-3__menu">
                <ul>
                    <li><a href="{{ route('about') }}">giới thiệu</a></li>
                    <li><a href="{{ route('career') }}">tuyển dụng</a></li>
                    <li><a href="{{ route('portfolio') }}">portfolio</a></li>
                    <li><a href="{{ route('team') }}">nhân sự</a></li>
                    <li><a href="{{ route('faq') }}">faq</a></li>
                    <li><a href="{{ route('service-detail') }}">Website - App - Hosting</a></li>
                    <li><a href="{{ route('service-detail') }}">Thiết kế thương hiệu</a></li>
                    <li><a href="{{ route('service-detail') }}">Quản trị & sáng tạo nội dung</a></li>
                    <li><a href="{{ route('service-detail') }}">dịch vụ doanh nghiệp</a></li>
                    <li><a href="{{ route('project') }}">dự án đã thực hiện</a></li>
                    <li><a href="javaScript:void(0)">kho giao diện</a></li>
                    <li><a href="{{ route('blog') }}">blogs</a></li>
                    <li><a href="{{ route('contact') }}">liên hệ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- offcanvas end  -->


<!-- search modal start -->
<div class="modal fade" id="search-template" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="search-template" aria-hidden="true">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#" class="form-search">
                    <input type="text" placeholder="Search">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- search modal end -->

<header class="header-area pos-abs zi-9">
    <div class="container container-large">
        <div class="header-area__inner">
            <div class="header__logo">
                <a href="{{ route('home') }}">
                    <img class="normal-logo show-light" style="width: 150px" src="/assets/imgs/logo/logo.png"
                        alt="Site Logo">
                </a>
            </div>
            <div class="header__nav pos-center">
                <nav class="main-menu">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">về chúng tôi</a>
                            <ul class="dp-menu">
                                <li><a href="{{ route('about') }}">giới thiệu</a></li>
                                <li><a href="{{ route('career') }}">tuyển dụng</a></li>
                                <li><a href="{{ route('portfolio') }}">portfolio</a></li>
                                <li><a href="{{ route('team') }}">nhân sự</a></li>
                                <li><a href="{{ route('faq') }}">faq</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0)">dịch vụ</a>
                            <ul class="dp-menu">
                                <li><a href="{{ route('service-detail') }}">Website - App - Hosting</a></li>
                                <li><a href="{{ route('service-detail') }}">Thiết kế thương hiệu</a></li>
                                <li><a href="{{ route('service-detail') }}">Quản trị & sáng tạo nội dung</a></li>
                                <li><a href="{{ route('service-detail') }}">dịch vụ doanh nghiệp</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Agency</a>
                            <ul class="dp-menu col-2">
                                <li><a href="javaScript:void(0)">Branding</a></li>
                                <li><a href="javaScript:void(0)">Web</a></li>
                                <li><a href="javaScript:void(0)">SEO</a></li>
                                <li><a href="javaScript:void(0)">Design</a></li>
                                <li><a href="javaScript:void(0)">Video</a></li>
                                <li><a href="javaScript:void(0)">AI</a></li>
                                <li><a href="javaScript:void(0)">Marketing</a></li>
                                <li><a href="javaScript:void(0)">Corporate</a></li>
                                <li><a href="javaScript:void(0)">Startup</a></li>
                                <li><a href="javaScript:void(0)">Modern</a></li>
                                <li><a href="javaScript:void(0)">Photography</a></li>
                                <li><a href="javaScript:void(0)">Creative</a></li>
                                <li><a href="javaScript:void(0)">Digital</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">dự án</a>
                            <ul class="dp-menu">
                                <li><a href="{{ route('project') }}">dự án đã thực hiện</a></li>
                                <li><a href="javaScript:void(0)">kho giao diện</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('blog') }}">blogs</a></li>
                        <li><a href="{{ route('contact') }}">liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-search" data-bs-toggle="modal" data-bs-target="#search-template">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="header__button d-none d-sm-inline-block">
                <a href="javaScript:void(0)" class="wc-btn wc-btn-primary btn-text-flip" data-bs-toggle="modal"
                    data-bs-target="#signupform"> <span data-text="Get started">Get started</span></a>
            </div>
            <div class="header__navicon d-xl-none">
                <button onclick="showCanvas3()" class="open-offcanvas">
                    <i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
    </div>
</header>
