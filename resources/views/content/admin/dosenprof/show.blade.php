@extends('template.admin')
@section('content')
    <a href="{{ url('admin/dosenprof') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Data Dosen
                <a href="{{ url('admin/dosenprof', $dosenprof->id) }}/edit" class="btn btn-warning float-right">
                    <i class="zmdi zmdi-edit"></i>
                    Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama</dt>
                        <dd>{{ $dosenprof->nama }}</dd>
                        <dt>NIP/NUP</dt>
                        <dd>{{ $dosenprof->nip }}</dd>
                        <dt>Bidang</dt>
                        <dd>{{ $dosenprof->bidang }}</dd>
                        <dt>Email</dt>
                        <dd>{{ $dosenprof->email }}</dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
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
