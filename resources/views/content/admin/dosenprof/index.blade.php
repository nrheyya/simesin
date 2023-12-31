@extends('template.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Dosen
                <a href="{{ url('admin/dosenprof/create') }}" class="btn btn-light bg-primary float-right"
                    style="background-color:#14b6ff;">
                    <i class="zmdi zmdi-plus"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-responsive" id="table_dosen">
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
                    @foreach ($list_dosenprof as $dosenprof)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/dosenprof', $dosenprof->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-eye"></i>
                                    </a>
                                    <a href="{{ url('admin/dosenprof', $dosenprof->id) }}/edit" class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $dosenprof->id }}" />
                                </div>
                            </td>
                            <td> <img src="{{ url("public/$dosenprof->foto") }}" class="card-img-top" alt="..."></td>
                            <td>{{ $dosenprof->nama }}</td>
                            <td>{{ $dosenprof->nip }}</td>
                            <td>{{ $dosenprof->bidang }}</td>
                            <td>{{ $dosenprof->email }}</td>
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
            let table = new DataTable('#table_dosen');
        </script>
    @endpush
@endsection
