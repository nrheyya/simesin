@extends('template.admin')
@section('content')
    <a href="{{ url('admin/akreditas') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Data Akreditasi
                <a href="{{ url('akreditas', $akreditas->id) }}/edit" class="btn btn-warning float-right">
                    <i class="zmdi zmdi-edit"></i>
                    Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Foto</dt>
                        <dd><img src="{{ url("public/$akreditas->foto") }}" alt="..." class="card-img"></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
