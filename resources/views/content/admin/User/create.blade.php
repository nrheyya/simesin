@extends('template.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data user
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/user') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            name</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name=nama>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Username</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name=username>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Email</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="email" name=email>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Password</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="password" name=password>
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
@endsection
