@extends('template.admin')
@section('content')
    <a href="{{ url('admin/kegiatan') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail
                <a href="{{ url('admin/kegiatan', $kegiatan->id) }}/edit" class="btn btn-warning float-right">
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
                        <dd>{{ $kegiatan->nama }}</dd>
                        <dt>deskripsi</dt>
                        <dd>{{ $kegiatan->deskripsi }}</dd>
                    </dl>
                </div>
                <div class="col-md-4">
                    <dl>
                        <dt>Foto</dt>
                        <dd><img src="{{ url("public/$kegiatan->foto") }}" class="card-img-top" alt="..."></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    {{-- <a href="{{ url('kegiatan') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail</div>
            <a href="{{ url('kegiatan', $kegiatan->id) }}/edit" class="btn btn-warning float-right">
                <i class="zmdi zmdi-edit"></i>
                Edit
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>

                        <dd>{{ $kegiatan->nama }}</dd>

                        <dd>{{ $kegiatan->kategori }}</dd>

                        <dd>{{ $kegiatan->deskripsi }}</dd>

                        <dd>
                            <img src="{{ url("public/$kegiatan->foto") }}" alt="..." class="card-img-top">
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
