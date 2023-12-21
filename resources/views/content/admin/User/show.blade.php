@extends('template.admin')
@section('content')
    <a href="{{ url('admin/user') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>

    <div class="card">
        <div class="card-header">
            <div class="card-title">Detail User
                <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning float-right">
                    <i class="zmdi zmdi-edit"></i>
                    Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama</dt>
                        <dd>{{ $user->nama }}</dd>
                        <dt>Username</dt>
                        <dd>{{ $user->username }}</dd>
                        <dt>Email</dt>
                        <dd>{{ $user->email }}</dd>
                        <dt>Password</dt>
                        <dd>{{ $user->password }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
