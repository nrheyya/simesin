@extends('template.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Fasilitas Ruang Kelas
                <a href="{{ url('admin/ruangkelas/create') }}" class="btn btn primary float-right"
                    style="background-color:#14b6ff;">
                    <i class="zmdi zmdi-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table_ruangkelas">
                <thead>
                    <th width="50px">NO</th>
                    <th width="200px">Aksi</th>
                    <th width="100px">Foto</th>
                    <th>Nama Kelas</th>
                </thead>
                <tbody>
                    @foreach ($list_ruangkelas as $ruangkelas)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/ruangkelas', $ruangkelas->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-info-outline"></i>
                                    </a>
                                    <a href="{{ url('admin/ruangkelas', $ruangkelas->id) }}/edit" class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $ruangkelas->id }}" />
                                </div>
                            </td>
                            <td> <img src="{{ url("public/$ruangkelas->foto") }}" class="card-img-top" alt="...">
                            </td>
                            <td>{{ $ruangkelas->nama }}</td>
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
            let table = new DataTable('#table_ruangkelas');
        </script>
    @endpush
@endsection
