@extends('template.client')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 bg-primary message-btn shadow-sm "
        style="background-color:#0A267A !important; border-radius:0.5rem !important; height:4rem; display:flex; text-align:center;">
        {{-- <button class="btn-primary btn" type="submit" name="submit-form"><span class="btn-shape"></span>pimpinan</button> --}}
        <span class="text-light " style=" margin-left:50%; padding-top:1rem; "> <b> PROFILE DOSEN </b></span>
    </div>
    <!-- team-section -->
    <section class="team-section about-page sec-pad ">
        <div class="auto-container" style="margin-top: -4rem">
            <div class="row clearfix">
                @foreach ($list_dosen as $dosen)
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow " data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box shadow-lg">
                                <img src="{{ url("public/$dosen->foto") }}"
                                    style="object-fit: cover; position: static; widht: 100%; height: 300px;">
                                <div class="lower-content justify-center text-center">
                                    <h4 style="color: black">
                                        {{ $dosen->nama }}
                                    </h4>
                                    <h6 style="color: black; font-weight: bold;">
                                        {{ $dosen->nip }}
                                    </h6>
                                    <h6 style="color: black">
                                        {{ $dosen->bidang }}
                                    </h6>
                                    <h6 style="color: #0A267A">
                                        {{ $dosen->email }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- team-section end -->
@endsection
