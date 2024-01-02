@extends('template.client')
@section('content')
    <!-- berita & kegiatan -->
    <section class="about-service" style="margin-top: -5rem">
        <div class="auto-container">
            <div class="other-text">
                <h6 style="l color:#ffffff; font-weight: bold;  text-align:center; " class="btn btn-primary">KEGIATAN</h6>
            </div>
            <br>
            <div class="row clearfix mb-4">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three wow fadeInUp animated animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ url("public/$kegiatan->foto") }}"
                                    style=" object-fit: cover; position: static; width: 100%;
                                    height: 250px;">
                                </>
                            </figure>
                            <div class="lower-content">
                                <h4 style="color: black">
                                    {{ $kegiatan->nama }}
                                </h4>
                                <h4 style="color: black">
                                    {{ $kegiatan->deskripsi }}
                                </h4>
                                <h6>
                                    <div class="link-style2">
                                        <a href="{{ url("kegiatan/$kegiatan->id") }}" class="read-more">
                                            Read More<i class="zmdi zmdi-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- berita & kegiatan -->
@endsection
