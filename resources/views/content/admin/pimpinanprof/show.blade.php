@extends('template.admin')
@section('content')
    <a href="{{ url('admin/pimpinanprof') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Data Profil Pimpinan
                <a href="{{ url('admin/pimpinanprof', $pimpinanprof->id) }}/edit" class="btn btn-warning float-right">
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
                        <dd>{{ $pimpinanprof->nama }}</dd>
                        <dt>NIP/NUP</dt>
                        <dd>{{ $pimpinanprof->nip }}</dd>
                        <dt>Jabatan</dt>
                        <dd>{{ $pimpinanprof->jabatan }}</dd>
                        <dt>Email</dt>
                        <dd>{{ $pimpinanprof->email }}</dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>Foto</dt>
                        <dd><img src="{{ url("public/$pimpinanprof->foto") }}" class="card-img-top" alt="..."></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
