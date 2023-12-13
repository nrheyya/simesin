@extends('template.admin')
@section('content')
    <a href="{{ url('admin/user') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>

    <body class="bg-theme bg-theme1">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Edit Data User
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('admin/user', $user->id) }}">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-lg-3 col-form-label form-control-label">
                                name</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" value="{{ $user->nama }}" name=nama>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Username</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" value="{{ $user->username }}" name=username>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Email</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="email" value="{{ $user->email }}" name=email>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="col-lg-3 col-form-label form-control-label">
                                Password</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="password" value="{{ $user->password }}" name=password>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-primary float-end mt-3"><i class="bx bx-save"> Save</i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
