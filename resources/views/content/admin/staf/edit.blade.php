@extends('template.admin')
@section('content')
    <a href="{{ url('admin/staf') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data Profil Staf
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/staf', $staf->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Nama</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="nama" value="{{ $staf->nama }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            NIP/NUP</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="nip" name="nip" value="{{ $staf->nip }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Posisi</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="posisi" value="{{ $staf->posisi }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Email</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="email" name="email" value="{{ $staf->email }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Foto</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="file" name="foto" accept=".png, .jpg, .svg"
                                value="{{ $staf->foto }}">
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
