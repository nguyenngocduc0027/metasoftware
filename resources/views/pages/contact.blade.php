@extends('index')
@push('styles')
    <link rel="stylesheet" href="/assets/css/master-contact.css">
@endpush
@section('content')
    <!-- hero area start  -->
    <section class="hero-area">
        <div class="container">
            <div class="hero-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title large has_fade_anim">Cần giải đáp? Chúng tôi luôn sẵn sàng hỗ trợ bạn.</h1>
                        </div>
                    </div>
                    <div class="content-last">
                        <div class="col-first">
                            <div class="image-box overflow-hidden">
                                <img src="/assets/imgs/gallery/img-s-106.webp"
                                    data-speed="0.9" alt="image">
                            </div>
                            <div class="contact-box">
                                <div class="shape-1">
                                    <img src="/assets/imgs/shape/img-s-85.webp"
                                        alt="shape">
                                </div>
                                <span class="title">Direct contact: </span>
                                <p class="link"><a href="#">Skype.arolax007</a></p>
                            </div>
                        </div>
                        <div class="col-second">
                            <div class="image-box">
                                <img src="/assets/imgs/gallery/img-s-107.webp"
                                    alt="image">
                            </div>
                            <div class="image-box overflow-hidden">
                                <img src="/assets/imgs/gallery/img-s-108.webp"
                                    data-speed="0.9" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="image-wrapper overflow-hidden">
        <img class="w-100" src="/assets/imgs/gallery/img-s-105.webp" data-speed="0.9"
            alt="image">
    </div>
    <!-- hero area end  -->

    <!-- contact area start  -->
    <section class="contact-area">
        <div class="container">
            <div class="contact-area-inner section-spacing">
                <div class="section-header">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title large has_fade_anim">Chúng tôi luôn chờ đón bạn!</h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="info-box has_fade_anim">
                        <div class="text-wrapper">
                            <p class="text">Chúng tôi muốn lắng nghe bạn. Hãy cho chúng tôi biết cách có thể giúp!</p>
                        </div>
                        <ul class="contact-list">
                            <li><a href="tel:+881750660600">+881 750 6606 00</a></li>
                            <li><a href="#">hello@arolax.com</a></li>
                            <li>230 alaska street dunasia <br>
                                QC (USA) H8R 1A1</li>
                        </ul>
                    </div>
                    <div class="contact-wrap has_fade_anim" data-delay="0.30">
                        <form action="#">
                            <div class="contact-formwrap">
                                <div class="contact-formfield">
                                    <input type="text" name="Name" id="Name" placeholder="Name*">
                                </div>
                                <div class="contact-formfield">
                                    <input type="text" name="Email" id="Email" placeholder="Email*">
                                </div>
                                <div class="contact-formfield">
                                    <input type="text" name="Phone" id="Phone" placeholder="Phone">
                                </div>
                                <div class="contact-formfield">
                                    <input type="text" name="Subject" id="Subject" placeholder="Subject*">
                                </div>
                                <div class="contact-formfield messages">
                                    <input type="text" name="Messages" id="Messages" placeholder="Messages*">
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button type="submit" class="wc-btn wc-btn-primary btn-text-flip"><span
                                        data-text="Send Message">Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end  -->
@endsection
