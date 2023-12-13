@extends('template.admin')
@section('content')
    <a href="{{ url('admin/ruangkelas') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{ url('admin/ruangkelas', $ruangkelas->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-12">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Nama Kelas</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="nama" value="{{ $ruangkelas->nama }}">
                            </div>
                            <label class="col-lg-3 col-form-label form-control-label">
                                Foto</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="file" name="foto" accept=".png, .jpg, .svg"
                                    value="{{ $ruangkelas->gambar }}">
                            </div>
                            <button class="btn-primary
                                    float-end btn btn-sm mt-3"><i
                                    class="bx bx-save"></i> Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
