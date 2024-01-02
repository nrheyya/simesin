@extends('template.admin')
@section('content')
    <a href="{{ url('admin/kurikulum') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/kurikulum', $kurikulum->id) }}">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Semester</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name=nama value="{{ $kurikulum->semester }}">
                        </div>
                        <label class="col-lg-3 col-form-label form-control-label">
                            Foto</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="file" name="foto" accept=".png, .jpg, .svg"
                                value="{{ $kurikulum->foto }}">
                        </div>
                        <button class="btn btn-sm btn-primary float-end mt-3"><i class="bx bx-save">Simpan</i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
