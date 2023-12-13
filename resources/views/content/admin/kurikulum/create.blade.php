@extends('template.admin')
@section('content')
    <a href="{{ url('kurikulum') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i> Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('kurikulum') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Nama Laboratorium & Bengkel</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="nama">
                        </div>
                        <label class="col-lg-3 col-form-label form-control-label">
                            Foto Laboratorium & Bengkel</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="file" name="foto" accept="png,jpg,svg">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-primary float-right mt-3"><i class="bx bx-save"> Save</i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
