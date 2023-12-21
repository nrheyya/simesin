@extends('template.admin')
@section('content')
    <a href="{{ url('admin/ruanglab') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail
                <a href="{{ url('admin/ruanglab', $ruanglab->id) }}/edit" class="btn btn-warning float-right">
                    <i class="zmdi zmdi-edit"></i>
                    Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama Laboratorium & Bengkel</dt>
                        <dd>{{ $ruanglab->nama }}</dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>Foto</dt>
                        <img src="{{ url("public/$ruanglab->foto") }}" alt="..." class="card-img">
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
