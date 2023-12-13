<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ruangkelas;

class RuangkelasController extends Controller
{
    function getDataRuangkelas()
    {
        $data['list_ruangkelas'] = Ruangkelas::all();
        return view('content.admin.ruangkelas.index', $data);
    }

    function create()
    {
        return view('content.admin.ruangkelas.create');
    }

    function store()
    {

        $ruangkelas = new Ruangkelas();
        $ruangkelas->nama = request('nama');
        $ruangkelas->handleUploadFoto();
        $ruangkelas->save();

        return redirect('admin/ruangkelas');
    }

    function show(Ruangkelas $ruangkelas)
    {
        $data['ruangkelas'] = $ruangkelas;
        return view('content.admin.ruangkelas.show', $data);
    }

    function edit(Ruangkelas $ruangkelas)
    {
        $data['ruangkelas'] = $ruangkelas;
        return view('content.admin.ruangkelas.edit', $data);
    }

    function update(Ruangkelas $ruangkelas)
    {
        $ruangkelas->nama = request('nama');
        $ruangkelas->handleUploadFoto();
        $ruangkelas->save();

        //if (request('foto')) {
        //    $image = $this->handleUpload('foto');
        //    $kelas->foto = $image;}

        return redirect('admin/ruangkelas');
    }

    function delete(Ruangkelas $ruangkelas)
    {
        $ruangkelas->delete();
        $ruangkelas->handleDeleteFoto();
        return redirect('admin/ruangkelas');
    }
}
