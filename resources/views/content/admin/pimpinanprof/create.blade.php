@extends('template.admin')
@section('content')
    <a href="{{ url('admin/pimpinanprof') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Pimpinan
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/pimpinanprof') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Nama</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="nama">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            NIP/NUP</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="nip" name="nip">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Jabatan</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="jabatan">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Email</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Foto</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="file" name="foto" accept=".png, .jpg, .svg">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-primary float-end mt-3"><i class="bx bx-save">Simpan</i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
