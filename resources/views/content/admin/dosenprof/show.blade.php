@extends('template.admin')
@section('content')
    <a href="{{ url('admin/dosenprof') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail</div>
            <a href="{{ url('admin/dosenprof', $dosenprof->id) }}/edit" class="btn btn-warning float-right">
                <i class="zmdi zmdi-edit"></i>
                Edit
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama</dt>
                        <dd>{{ $dosenprof->nama }}</dd>
                        <dt>Jabatan</dt>
                        <dd>{{ $dosenprof->posisi }}</dd>
                        <dt>Email</dt>
                        <dd>{{ $dosenprof->email }}</dd>
                        <dt>Foto</dt>
                        <dd>
                            <img src="{{ url("public/$dosenprof->foto") }}" alt="..." class="card-img-top">
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
