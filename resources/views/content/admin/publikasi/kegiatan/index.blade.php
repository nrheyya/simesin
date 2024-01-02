@extends('template.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Kegiatan
                <a href="{{ url('admin/kegiatan/create') }}" class="btn btn-light bg-primary float-right"
                    style="background-color:#14b6ff;">
                    <i class="zmdi zmdi-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table_kegiatan">
                <thead>
                    <th width="50px">NO</th>
                    <th width="100px">Aksi</th>
                    <th width="100px">Foto</th>
                    <th max-width="50px">Nama kegiatan</th>
                    <th width="100%">Deskripsi</th>
                </thead>
                <tbody>
                    @foreach ($list_kegiatan as $kegiatan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/kegiatan', $kegiatan->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-eye"></i>
                                    </a>
                                    <a href="{{ url('admin/kegiatan', $kegiatan->id) }}/edit" class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $kegiatan->id }}" />
                                </div>
                            </td>
                            <td> <img src="{{ url("public/$kegiatan->foto") }}" class="card-img-top" alt="..."></td>
                            <td>{{ $kegiatan->nama }}</td>
                            <td>{{ $kegiatan->deskripsi }}</td>
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
            let table = new DataTable('#table_kegiatan');
        </script>
    @endpush
@endsection
