@extends('layout.home')

@section('title', 'About')

@section('content')
<!-- Intro -->
<section class="section-wrap intro pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mb-50">
                <h2 class="intro-heading">Tentang OHM Cloud</h2>
                <p>{{$about->deskripsi}}</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.229817161331!2d107.6316854!3d-6.973007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1716722092448!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <hr class="mb-0">
    </div>
</section> <!-- end intro -->

<!-- Promo Section -->
<section class="section-wrap promo-bg" style="background-image:url(/front/img/imagecinematic.jpg);">
    <div class="container text-center">
        <div class="table-box">
            <h2 class="heading-frame white">Toko Vape Yang Paling Terlengkap!</h2>
        </div>
    </div>
</section> <!-- end promo section -->

<!-- Testimonials -->
<section class="section-wrap testimonials">
    <div class="container">

        <div class="row heading-row mb-20">
            <div class="col-md-6 col-md-offset-3 text-center">
                <span class="subheading">Butuh Bantuan?</span>
                <h2 class="heading bottom-line"><a href="/contact">Hubungi kami</a></h2>
            </div>
        </div>

        <div id="owl-testimonials" class="owl-carousel owl-theme owl-dark-dots text-center">
            @foreach ($testimonies as $testimony)
            <div class="item">
                <div class="testimonial">
                    <p class="testimonial-text">{{$testimony->deskripsi}}</p>
                    <span>{{$testimony->nama_testimoni}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section> <!-- end testimonials -->
@endsection
