@extends('template.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Kurikulum
                <a href="{{ url('admin/kurikulum/create') }}" class="btn btn-light  bg-primary float-right"
                    style="background-color:#14b6ff;">
                    <i class="zmdi zmdi-plus"></i>
                    Tambah
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-responsive" id="table_kurikulum">
                <thead>
                    <th width="50px">NO</th>
                    <th width="300px">Aksi</th>
                    <th width="300px">Semester </th>
                    <th width="250px">Foto </th>
                </thead>
                <tbody>
                    @foreach ($list_kurikulum as $kurikulum)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/kurikulum', $kurikulum->id) }}" class="btn btn-info">
                                        <i class="zmdi zmdi-info-outline"></i>
                                    </a>
                                    <a href="{{ url('admin/kurikulum', $kurikulum->id) }}/edit" class="btn btn-warning">
                                        <i class="zmdi zmdi-edit"></i>Edit
                                    </a>
                                    <x-button.delete id="{{ $kurikulum->id }}" />
                                </div>
                            </td>
                            <td>
                                {{ $kurikulum->semester }}
                            </td>
                            <td>
                                <img src="{{ url("public/$kurikulum->foto") }}" class="card-img-top">
                            </td>
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
            let table = new DataTable('#table_kurikulum');
        </script>
    @endpush
@endsection
