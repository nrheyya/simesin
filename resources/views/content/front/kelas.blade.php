@extends('template.client')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 bg-primary message-btn shadow-sm "
        style="background-color:#0A267A !important; border-radius:0.5rem !important; height:4rem; display:flex; text-align:center;">
        <span class="text-light " style=" margin-left:44%; padding-top:1rem; "> <b>RUANGAN KELAS</b></span>
    </div>
    <!-- team-section -->
    <section class="team-section about-page sec-pad ">
        <div class="auto-container " style="margin-top: -4rem">
            <div class="col-md-12 p-2">
                <div class="row">
                    @foreach ($list_kelas as $kelas)
                        <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                            <figure class="figure">
                                <img src="{{ url("public/$kelas->foto") }}" class="figure-img img-fluid " alt="..."
                                    width="100%">
                                <figcaption class="figure-caption">
                                    <h4 style="color: black">
                                        {{ $kelas->nama }}
                                    </h4>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        {{-- <div class="col-md-6 col-sm-12 col-lg-6">
                        <figure class="figure">
                            <img src="{{ url('public') }}/assets/images/homee.jpg" class="figure-img img-fluid "
                                alt="..." width="100%">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                </div>

           
            <div class="col-md-12  p-2">
                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <figure class="figure">
                            <img src="{{ url('public') }}/assets/images/homee.jpg" class="figure-img img-fluid "
                                alt="..." width="100%">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <figure class="figure">
                            <img src="{{ url('public') }}/assets/images/homee.jpg" class="figure-img img-fluid "
                                alt="..." width="100%">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>

                </div>
                </div> --}}

    </section>
    <!-- team-section end -->
@endsection
