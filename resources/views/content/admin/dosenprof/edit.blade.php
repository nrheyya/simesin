@extends('template.admin')

@section('content')
    <a href="{{ url('admin/dosenprof') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data Profil Dosen
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{ url('admin/dosenprof', $dosenprof->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Nama</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" name="nama"
                                        value="{{ $dosenprof->nama }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    NIP/NUP</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="nip" name="nip" value="{{ $dosenprof->nip }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Bidang</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" name="bidang"
                                        value="{{ $dosenprof->bidang }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Email</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="email" name="email"
                                        value="{{ $dosenprof->email }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Foto</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="file" name="foto" accept=".png, .jpg, .svg"
                                        value="{{ $dosenprof->foto }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary float-end mt-3"><i class="bx bx-save">
                                        Simpan</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
