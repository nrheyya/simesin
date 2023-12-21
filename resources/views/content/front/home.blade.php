@extends('template.client')
@section('content')
    <!-- banner-section -->
    <section class="banner-section style-one">
        <div class="banner-carousel owl-theme owl-carousel">
            <div class="slide-item">
                <div class="image-layer">
                    <img src="{{ url('public') }}/assets/images/berita.jpeg" alt="">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <h4>SELAMAT DATANG</h4> <br>
                        <h3>JURUSAN TEKNIK MESIN</h3>
                        <h6>POLITEKNIK NEGERI KETAPANG</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->
    {{-- <div class="page-links bg-secondary">
        <div class="auto-container ">
            <div class="row clearfix ">
                <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <div class="icon-box"></div>
                        <h3 style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">VISI</h3>
                            <p style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">
                                Menjadi pusat pendidikan dan penelitian terapan dalam bidang teknik mesin, khususnya
                                perawatan dan perbaikan mesin, untuk menghasilkan lulusan yang memiliki keterampilan, akhlak
                                dan tanggung jawab yang selaras dengan Visi Politeknik Negeri Ketapang
                            </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <h3 style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">MISI</h3>
                            <p style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">
                                Menyelenggarakan pendidikan vokasional dan penelitian terapan di bidang teknik mesin,
                                khususnya perawatan dan perbaikan mesin, untuk menunjang pembangunan daerah guna
                                meningkatkan kesejahteraan masyarakat; membina dan mengembangkan profesionalisme yang sehat
                                dan dinamis; mengembangkan dan mendayagunakan ilmu pengetahuan dan teknologi untuk
                                meningkatkan kesejahteraan masyarakat yang selaras dengan Misi Politeknik Negeri Ketapang
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <section>
        <div class="container-fluid mt-5 ">
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-lg" style="height: 18rem; background-color:#0A267A;">
                        <div class="text mt-4 ">
                            <div class="icon-box"></div>
                            <h3 style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">VISI</h3>
                            <p style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">
                                Menjadi pusat pendidikan dan penelitian terapan dalam bidang teknik mesin, khususnya
                                perawatan dan perbaikan mesin, untuk menghasilkan lulusan yang memiliki keterampilan, akhlak
                                dan tanggung jawab yang selaras dengan Visi Politeknik Negeri Ketapang
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-lg" style="height: 18rem; background-color:#0A267A;">
                        <div class="text  mt-4">
                            <h3 style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">MISI</h3>
                            <p style="font-family: 'Poppins', sans-serif; color:#ffffff; text-align:center; ">
                                Menyelenggarakan pendidikan vokasional dan penelitian terapan di bidang teknik mesin,
                                khususnya perawatan dan perbaikan mesin, untuk menunjang pembangunan daerah guna
                                meningkatkan kesejahteraan masyarakat; membina dan mengembangkan profesionalisme yang sehat
                                dan dinamis; mengembangkan dan mendayagunakan ilmu pengetahuan dan teknologi untuk
                                meningkatkan kesejahteraan masyarakat yang selaras dengan Misi Politeknik Negeri Ketapang
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- video-->
    <section class="highlights-section">
        <div class="container clearfix">
            <div class="single-column">
                <div class="content">
                    <div class="content-box">
                        <div class="other-text">
                            <h6 style="font-family: 'Poppins', sans-serif; color:#ffffff; font-weight: bold;  text-align:center; font-size:1,8rem; "
                                class="btn btn-primary mb-5 mt-5">VIDEO PROFILE POLITAP</h6>
                        </div>
                        <div class="video-btn">
                            <iframe width="1080" height="480" src="https://www.youtube.com/embed/1mVaY1IvEs8"
                                title="Jingle Vokasi Brawijaya - YUWARAJA XIV" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video end -->


    <!-- berita & kegiatan -->
    <section class="about-service" style="margin-top: -5rem">
        <div class="auto-container">
            <div class="other-text">
                <h6 style="l color:#ffffff; font-weight: bold;  text-align:center; " class="btn btn-primary">KEGIATAN</h6>
            </div>
            <br>
            <div class="row clearfix mb-4">
                @foreach ($list_kegiatan as $kegiatan)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-three wow fadeInUp animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ url("public/$kegiatan->foto") }}"
                                        style=" object-fit: cover; position: static; width: 100%;
                                        height: 250px;">
                                </figure>
                                <div class="lower-content">
                                    <h5 class="card-title" style="color: black; font-weight: bold;">
                                        {{ $kegiatan->nama }}
                                    </h5>
                                    <h6>
                                        <div class="link-style2">
                                            <a href="{{ url("kegiatan/$kegiatan->id") }}" class="read-more"
                                                class="btn btn-primary">
                                                Read More<i class="zmdi zmdi-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </h6>
                                    {{-- <p>Indignation & dislikes men who are so we demoralized so that one.</p> --}}
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- berita & kegiatan -->
@endsection
