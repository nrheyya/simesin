@extends('template.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pimpinan
                <a href="{{ url('admin/pimpinanprof/create') }}" class="btn btn-light bg-primary float-right"
                    style="background-color:#14b6ff;">
                    <i class="zmdi zmdi-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="table_pimpinan">
                <thead>
                    <th width="50px">NO</th>
                    <th width="50px">Aksi</th>
                    <th width="100px">Foto</th>
                    <th>Nama</th>
                    <th>NIP/NUP</th>
                    <th>Jabatan</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($list_pimpinanprof as $pimpinanprof)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/pimpinanprof', $pimpinanprof->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-info-outline"></i>
                                    </a>
                                    <a href="{{ url('admin/pimpinanprof', $pimpinanprof->id) }}/edit"
                                        class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $pimpinanprof->id }}" />
                                </div>
                            </td>
                            <td> <img src="{{ url("public/$pimpinanprof->foto") }}" class="card-img-top" alt="...">
                            </td>
                            <td>{{ $pimpinanprof->nama }}</td>
                            <td>{{ $pimpinanprof->nip }}</td>
                            <td>{{ $pimpinanprof->jabatan }}</td>
                            <td>{{ $pimpinanprof->email }}</td>
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
            let table = new DataTable('#table_pimpinan');
        </script>
    @endpush
@endsection
