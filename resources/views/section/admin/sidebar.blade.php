<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <img src="{{ url('public/assetss/images/Politap.png') }}" class="logo-icon" alt="logo icon">
        <h6 class="logo-text">
            JURUSAN TEKNIK MESIN
        </h6>
    </div>

    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <x-layout.admin.sidebar.menu-item url="beranda" label="Dashboard" icon="zmdi zmdi-view-dashboard" />
        {{-- <x-layout.admin.sidebar.menu-item url="profile" label="Profile" icon="zmdi zmdi-face" /> --}}
        <x-layout.admin.sidebar.menu-item url="user" label="User" icon="zmdi zmdi-account-circle" />
        <x-layout.admin.sidebar.menu-item url="pimpinanprof" label="Pimpinan" icon="zmdi zmdi-account" />
        <x-layout.admin.sidebar.menu-item url="dosenprof" label="Dosen" icon="zmdi zmdi-accounts" />
        <x-layout.admin.sidebar.menu-item url="staf" label="Teknisi & Administrasi" icon="zmdi zmdi-accounts-alt" />
        <x-layout.admin.sidebar.menu-item url="ruangkelas" label="Ruang Kelas" icon="zmdi zmdi-home" />
        <x-layout.admin.sidebar.menu-item url="ruanglab" label="Ruang Lab/Bengkel" icon="zmdi zmdi-settings" />
        <x-layout.admin.sidebar.menu-item url="kurikulum" label="Kurikulum" icon="zmdi zmdi-folder" />
        <x-layout.admin.sidebar.menu-item url="akreditas" label="Akreditas" icon="zmdi zmdi-image" />
        <x-layout.admin.sidebar.menu-item url="kegiatan" label="Kegiatan" icon="zmdi zmdi-accounts-list" />

        {{-- <x-layout.admin.sidebar.menu-item url="login" label="Login" icon="zmdi zmdi-lock" />
        <x-layout.admin.sidebar.menu-item url="register" label="Register" icon="zmdi zmdi-account-circle" /> --}}
    </ul>
</div>
