@extends('template.admin')
@section('content')
    <a href="{{ url('admin/staf') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail Data Profil Staf
                <a href="{{ url('admin/staf', $staf->id) }}/edit" class="btn btn-warning float-right">
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
                        <dd>{{ $staf->nama }}</dd>
                        <dt>NIP/NUP</dt>
                        <dd>{{ $staf->nip }}</dd>
                        <dt>Jabatan</dt>
                        <dd>{{ $staf->posisi }}</dd>
                        <dt>Email</dt>
                        <dd>{{ $staf->email }}</dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>Foto</dt>
                        <dd><img src="{{ url("public/$staf->foto") }}" class="card-img-top" alt="..."></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
