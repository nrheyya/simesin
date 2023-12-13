@extends('template.admin')
@section('content')
    <a href="{{ url('admin/kurikulum') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail</div>
            <a href="{{ url('admin/kurikulum', $kurikulum->id) }}/edit" class="btn btn-warning float-right">
                <i class="zmdi zmdi-edit"></i>
                Edit
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama</dt>
                        <dd>{{ $kurikulum->nama }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <img src="{{ url('public/kurikulum', $kurikulum->foto) }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
