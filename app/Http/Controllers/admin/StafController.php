<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\staf;

class StafController extends Controller
{
    function getDataStaf()
    {
        $data['list_staf'] = Staf::all();
        return view('content.admin.staf.index', $data);
    }
    function create()
    {
        return view('content.admin.staf.create');
    }
    function store()
    {
        $staf = new Staf();
        $staf->nama = request('nama');
        $staf->posisi = request('posisi');
        $staf->email = request('email');
        $staf->handleUploadFoto();

        $staf->save();

        return redirect('admin/staf')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit(Staf $staf)
    {
        $data['staf'] =  $staf;
        return view('content.admin.staf.edit', $data);
    }
    function show($staf)
    {
        $data['staf'] = Staf::find($staf);
        return view('content.admin.staf.show', $data);
    }
    function update(Staf $staf)
    {

        $staf->nama = request('nama');
        $staf->posisi = request('posisi');
        $staf->email = request('email');
        $staf->handleUploadFoto();
        $staf->save();

        return redirect('admin/staf')->with('success', 'Data Berhasil Diedit');
    }
    function delete(Staf $staf)
    {
        $staf->delete();

        return redirect('admin/staf')->with('danger', 'Data Berhasil Dihapus');
    }
}
