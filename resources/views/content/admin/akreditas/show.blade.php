@extends('template.admin')
@section('content')
    <a href="{{ url('admin/akreditas') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail</div>
            <a href="{{ url('akreditas', $akreditas->id) }}/edit" class="btn btn-warning float-right">
                <i class="zmdi zmdi-edit"></i>
                Edit
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama</dt>
                        <dd>{{ $akreditas->nama }}</dd>
                    </dl>
                </div>
                <dt>Nama</dt>
                <div class="col-md-6">
                    <dl>
                        <img src="{{ url("public/$akreditas->foto") }}" alt="..." class="card-img">
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
