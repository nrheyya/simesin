@extends('template.admin')
@section('content')
    <a href="{{ url('admin/dosenprof') }}" class="btn btn-warning btn-sm mb-2"><i class="bx bx-chevron-left-circle"></i>
        Kembali</a>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Dosen
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('admin/dosenprof') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Nama</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="nama">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Bidang</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="bidang">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Email</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-lg-3 col-form-label form-control-label">
                            Foto</label>
                        <div class="col-lg-12">
                            <input class="form-control" type="file" name="foto" accept=".png, .jpg, .svg">
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
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Maklumat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('dosenprof') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for="" class="control-label">Gambar</label>
                                    <input type="file" class="form-control" name="gambar" accept="png,jpg,svg">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-warning float-end mt-3"><i class="bx bx-save"> Save</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
