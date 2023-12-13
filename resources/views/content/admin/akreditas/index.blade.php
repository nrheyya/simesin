@extends('template.admin')
@section('content')
    <div class="card-title">
        <div class="ms-auto">
            Akreditasi
            <div class="btn-group">
                <div class="float-right">
                    <a href="{{ url('admin/akreditas/create') }}" class="btn btn-light" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><i class="zmdi zmdi-plus me-1"></i>
                        Add New</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="{{ url('akreditas/create') }}" class="btn btn primary float-right" style="background-color:#14b6ff;">
                <i class="zmdi zmdi-plus"></i>
                Tambah
            </a> --}}
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <table class="table table-striped" id="table_akreditas">
                    <thead>
                        <th width="50px">NO</th>
                        <th width="200px">Aksi</th>
                        <th width="100px">Foto</th>
                        <th>Nama</th>
                    </thead>
                    <tbody>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 product-grid">
                            @foreach ($list_akreditas as $akreditas)
                                <div class="col">
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/akreditas', $akreditas->id) }}" class="btn btn-info">
                                                    <i class="zmdi zmdi-info-outline"></i>
                                                </a>
                                                <a href="{{ url('admin/akreditas', $akreditas->id) }}/edit"
                                                    class="btn btn-warning">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </a>
                                                <x-button.delete id="{{ $akreditas->id }}" />
                                            </div>
                                        </td>
                                        <td> <img src="{{ url("public/$akreditas->foto") }}" class="card-img-top"
                                                alt="...">
                                        </td>
                                        <td>{{ $akreditas->nama }}</td>
                                    </tr>
                                </div>
                            @endforeach
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('style')
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    @endpush

    @push('script')
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <script>
            let table = new DataTable('#table_akreditas');
        </script>
    @endpush
@endsection
