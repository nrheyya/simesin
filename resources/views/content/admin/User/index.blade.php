@extends('template.admin')
@section('content')
    <div class="card-header">
        <div class="card-title">
            Data User
            <a href="{{ url('admin/user/create') }}" class="btn btn-light bg-primary float-right"
                style="background-color:#14b6ff;">
                <i class="zmdi zmdi-plus me-1"></i>
                Tambah User
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table_user">
                <thead>
                    <th width="50px">NO</th>
                    <th width="150px">Aksi</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    @foreach ($list_user as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/user', $user->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-eye"></i>
                                    </a>
                                    <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <x-button.delete id="{{ $user->id }}" />
                                </div>
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->email }}</td>
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
            let table = new DataTable('#table_user');
        </script>
    @endpush
@endsection
