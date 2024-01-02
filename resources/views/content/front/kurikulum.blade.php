@extends('template.client')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 bg-primary message-btn shadow-sm "
        style="background-color:#0A267A !important; border-radius:0.5rem !important; height:4rem; display:flex; text-align:center;">
        <span class="text-light " style=" margin-left:44%; padding-top:1rem; "> <b> KURIKULUM</b></span>
    </div>

    <section class="team-section about-page sec-pad ">
        <div class="auto-container" style="margin-top: -4rem">
            <div class="row clearfix">
                @foreach ($list_kurikulum as $kurikulum)
                    <article class="article-1 mt-5">
                        <div class="content-box">
                            <div class="content-art">
                                <h5 class="section-title has-text-align-center">
                                </h5>
                            </div>
                            <div class="image-box">
                                <div class="image">
                                    <img src="{{ url("public/$kurikulum->foto") }}" alt="image" style="display: flex;">
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
