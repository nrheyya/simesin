<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akreditas;

class AkreditasController extends Controller
{
    function getDataAkreditas()
    {
        $data['list_akreditas'] = Akreditas::all();
        return view('content.admin.akreditas.index', $data);
    }

    function create()
    {
        return view('content.admin.akreditas.create');
    }

    function store()
    {

        $akreditas = new Akreditas();
        $akreditas->nama = request('nama');
        $akreditas->handleUploadFoto();
        $akreditas->save();

        return redirect('admin/akreditas')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Akreditas $akreditas)
    {
        $data['akreditas'] = $akreditas;
        return view('content.admin.akreditas.show', $data);
    }

    function edit(Akreditas $akreditas)
    {
        $data['akreditas'] = $akreditas;
        return view('content.admin.akreditas.edit', $data);
    }

    function update(Akreditas $akreditas)
    {
        $akreditas->nama = request('nama');
        $akreditas->handleUploadFoto();
        $akreditas->save();

        //if (request('foto')) {
        //    $image = $this->handleUpload('foto');
        //    $kelas->foto = $image;}

        return redirect('admin/akreditas')->with('success', 'Data Berhasil Diedit');
    }

    function delete(Akreditas $akreditas)
    {
        $akreditas->delete();
        $akreditas->handleDeleteFoto();
        return redirect('admin/akreditas')->with('danger', 'Data Berhasil Dihapus');
    }
}
