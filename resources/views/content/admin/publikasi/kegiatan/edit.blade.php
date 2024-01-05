@extends('template.admin')

@section('content')
    <a href="{{ url('admin/kegiatan') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{ url('admin/kegiatan', $kegiatan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Nama kegiatan</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" name="nama" value="{{ $kegiatan->nama }}">
                                </div>
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Deskripsi</label>
                                <div class="col-lg-12">
                                    <textarea class="form-control" type="text" name="deskripsi" id="" cols="10" rows="8"
                                        value="{{ $kegiatan->deskripsi }}"></textarea>
                                </div>
                                <label class="col-lg-3 col-form-label form-control-label">
                                    Foto</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="file" name="foto" accept=".png, .jpg, .svg"
                                        value="{{ $kegiatan->foto }}">
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
