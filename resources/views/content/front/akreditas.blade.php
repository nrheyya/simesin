@extends('template.client')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 bg-primary message-btn shadow-sm "
        style="background-color:#0A267A !important; border-radius:0.5rem !important; height:4rem; display:flex; text-align:center;">
        <span class="text-light " style=" margin-left:44%; padding-top:1rem; "> <b> AKREDITASI</b></span>
    </div>

    <section class="team-section about-page sec-pad ">
        <div class="auto-container" style="margin-top: -4rem">
            <div class="row clearfix">
                @foreach ($list_akreditas as $akreditas)
                    <article class="article-1">
                        <div class="content-box">
                            <div class="content-art">
                                <h5 class="section-title has-text-align-center">
                                </h5>
                            </div>
                            <div class="image-box">
                                <div class="image">
                                    <img src="{{ url("public/$akreditas->foto") }}" alt="image"
                                        style="display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            height: 100vh;
                                            margin: 0;
                                            object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </article>
                    {{-- <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow " data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box shadow-lg">
                                <img src="{{ url("public/$akreditas->foto") }}"
                                    style="object-fit: cover; position: center; widht: 100%; height: 250px; align-items: center;
                                    justify-content: center;">
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            </div>
        </div>
    </section>
@endsection
