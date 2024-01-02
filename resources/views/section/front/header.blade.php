<header class="main-header style-five">
    <div class="page-header-mobile-info">
        <div class="page-header-mobile-info-content">
            <!-- header-upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="upper-inner clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="index-3.html"><img src="assets/images/logo.png"
                                        alt=""></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- header-top -->
    <div class="header-top-two auto-hidden">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <ul class="info pull-left clearfix">
                    <figure class="header-logo"><a href="index.html"><img
                                src="{{ url('public') }}/assets/images/logoheaders.png">
                    </figure>
                </ul>
                <ul class="info pull-right clearfix">
                    <li><i class="flaticon-email"></i><a href="#">abc@politap.ic.id</a></li>
                    <li><i class="flaticon-telephone"></i><a href="#">+62895123456</a></li>
                    <li><i class="flaticon-location"></i><a href="#">JL. Rangga Sentap </a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class=" dropdown"><a href="{{ url('/') }}">BERANDA</a>
                                </li>
                                <li class=" dropdown"><a>PROFIL</a>
                                    <ul>
                                        <li><a href="{{ url('about/pimpinan') }}">Pimpinan</a></li>
                                        <li><a href="{{ url('about/dosen') }}">Dosen</a></li>
                                        <li><a href="{{ url('about/teknisi') }}">Teknisi / Administrasi</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a>FASILITAS</a>
                                    <ul>
                                        <li><a href="{{ url('about/lab') }}">Laboratorium & Bengkel</a></li>
                                        <li><a href="{{ url('about/kelas') }}">Ruangan Kelas</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a>AKADEMIK</a>
                                    <ul>
                                        <li><a href="{{ url('about/kurikulum') }}">Kurikulum</a></li>
                                        <li><a href="{{ url('about/akreditas') }}">Akreditasi</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ url('about/jurnal') }}">JURNAL</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""
                    title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">anum</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>

            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
