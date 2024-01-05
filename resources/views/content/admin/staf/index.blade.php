@extends('template.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Staf Teknisi & Administrasi
                <a href="{{ url('admin/staf/create') }}" class="btn btn-light bg-primary float-right"
                    style="background-color:#14b6ff;">
                    <i class="zmdi zmdi-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-responsive" id="table_staf">
                <thead>
                    <th width="50px">NO</th>
                    <th width="50px">Aksi</th>
                    <th width="100px">Foto</th>
                    <th>Nama</th>
                    <th>NIP/NUP</th>
                    <th>Posisi</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($list_staf as $staf)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/staf', $staf->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-info-outline"></i>
                                    </a>
                                    <a href="{{ url('admin/staf', $staf->id) }}/edit" class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $staf->id }}" />
                                </div>
                            </td>
                            <td> <img src="{{ url("public/$staf->foto") }}" class="card-img-top" alt="...">
                            </td>
                            <td>{{ $staf->nama }}</td>
                            <td>{{ $staf->nip }}</td>
                            <td>{{ $staf->posisi }}</td>
                            <td>{{ $staf->email }}</td>
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
            let table = new DataTable('#table_staf');
        </script>
    @endpush
@endsection
