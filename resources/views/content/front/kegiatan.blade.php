@extends('template.client')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 bg-primary message-btn shadow-sm "
        style="background-color:#0A267A !important; border-radius:0.5rem !important; height:4rem; display:flex; text-align:center;">
        <span class="text-light " style=" margin-left:44%; padding-top:1rem; "> <b> KEGIATAN</b></span>
    </div>
    <!-- berita & kegiatan -->
    <section class="about-service" style="margin-top: -5rem">
        <div class="auto-container">
            <br>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-details-content">
                            <div class="content-one">
                                <figure class="image-box"><img src="{{ url("public/$kegiatan->foto") }}"
                                        style=" object-fit: cover; position: static; width: 100%;
                                    height: 250px;">
                                    </>
                                </figure>
                                <div class="lower-content">
                                    <h4 style="color: black">
                                        {{ $kegiatan->nama }}
                                    </h4>
                                </div>
                                <div class="text">
                                    <h4 style="color: black">
                                        <p>
                                            {{ $kegiatan->deskripsi }}
                                        </p>
                                    </h4>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
    </section>
    <!-- berita & kegiatan -->

    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="content-one">
                        <figure class="image-box"><img src="assets/images/news/news-9.jpg" alt=""></figure>
                        <div class="text">
                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself
                                because it is pain but all because occasionally circumstances occur take a trivial
                                examples, which of us ever undertakes laborious physical exercise, except to obtain some
                                advantage from it.</p>
                            <ul class="list clearfix">
                                <li>Indignation and dislike men who are beguiled and demoralized charms.</li>
                                <li>Untrammelled and when nothing prevents work.</li>
                                <li>Owing to the claims of duty or the obligations of business it will frequently occur.
                                </li>
                                <li>Duty or the obligations of business it will frequently occur that pleasures.</li>
                            </ul>
                            <h3>Services On Your Schedule</h3>
                            <p>Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure
                                the moment so blinded by desire, that they cannot foresee the pain and trouble.</p>
                            <p>Fault with a man who chooses to enjoy a pleasure that annoying consequences, or one who
                                avoids.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
