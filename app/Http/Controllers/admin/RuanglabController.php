<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ruanglab;

class RuanglabController extends Controller
{
    function getDataRuanglab()
    {
        $data['list_ruanglab'] = Ruanglab::all();
        return view('content.admin.ruanglab.index', $data);
    }

    function create()
    {
        return view('content.admin.ruanglab.create');
    }

    function store()
    {

        $ruanglab = new Ruanglab();
        $ruanglab->nama = request('nama');
        $ruanglab->handleUploadFoto();
        $ruanglab->save();

        return redirect('admin/ruanglab');
    }

    function show(Ruanglab $ruanglab)
    {
        $data['ruanglab'] = $ruanglab;
        return view('content.admin.ruanglab.show', $data);
    }

    function edit(Ruanglab $ruanglab)
    {
        $data['ruanglab'] = $ruanglab;
        return view('content.admin.ruanglab.edit', $data);
    }

    function update(Ruanglab $ruanglab)
    {
        $ruanglab->nama = request('nama');
        $ruanglab->handleUploadFoto();
        $ruanglab->save();

        //if (request('foto')) {
        //    $image = $this->handleUpload('foto');
        //    $kelas->foto = $image;}

        return redirect('admin/ruanglab');
    }

    function delete(Ruanglab $ruanglab)
    {
        $ruanglab->delete();
        $ruanglab->handleDeleteFoto();
        return redirect('admin/ruanglab');
    }
}
