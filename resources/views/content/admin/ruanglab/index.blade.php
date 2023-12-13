@extends('template.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Fasilitas Ruang Laboratorium & Bengkel
                <a href="{{ url('admin/ruanglab/create') }}" class="btn btn primary float-right"
                    style="background-color:#14b6ff;">
                    <i class="zmdi zmdi-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table_ruanglab">
                <thead>
                    <th width="50px">NO</th>
                    <th width="200px">Aksi</th>
                    <th width="100px">Foto</th>
                    <th>Nama Laboratorium & Bengkel</th>
                </thead>
                <tbody>
                    @foreach ($list_ruanglab as $ruanglab)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/ruanglab', $ruanglab->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-info-outline"></i>
                                    </a>
                                    <a href="{{ url('admin/ruanglab', $ruanglab->id) }}/edit" class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $ruanglab->id }}" />
                                </div>
                            </td>
                            <td> <img src="{{ url("public/$ruanglab->foto") }}" class="card-img-top" alt="...">
                            </td>
                            <td>{{ $ruanglab->nama }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @push('style')
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    @endpush

    @push('script')
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <script>
            let table = new DataTable('#table_ruanglab');
        </script>
    @endpush
@endsection

{{-- <div class="card">
        <div class="card-header">
            <div class="card-title">
                Kelas
            </div>
            <a href="{{ url('ruangkelas/create') }}" class="btn btn primary float-right" style="background-color:#14b6ff;">
                <i class="zmdi zmdi-plus"></i>
                Tambah
            </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">NO</th>
                    <th width="150px">Aksi</th>
                    <th>Nama </th>
                    <th>Foto </th>
                </thead>
                <tbody>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 product-grid">
                        @foreach ($list_ruangkelas as $ruangkelas)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('ruangkelas', $ruangkelas->id) }}" class="btn btn-info">
                                            <i class="zmdi zmdi-info-outline"></i>
                                        </a>
                                        <a href="{{ url('ruangkelas', $ruangkelas->id) }}/edit" class="btn btn-warning">
                                            <i class="zmdi zmdi-edit"></i>Edit
                                        </a>
                                        <x-button.delete id="{{ $ruangkelas->id }}" />
                                    </div>
                                </td>
                                <td>
                                    {{ $ruangkelas->nama }}
                                </td>
                                <td>
                                    <img src="{{ url("public/$ruangkelas->foto") }}" class="card-img-top" alt="...">
                                </td>
                            </tr>
                        @endforeach
                    </div>
                </tbody>
            </table>
        </div>
    </div>
@endsection
--}}
