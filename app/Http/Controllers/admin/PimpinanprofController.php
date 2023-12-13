<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use  App\Models\Pimpinanprof;

class PimpinanprofController extends Controller
{
    function getDataPimpinanprof()
    {
        $data['list_pimpinanprof'] = Pimpinanprof::all();
        return view('content.admin.pimpinanprof.index', $data);
    }
    function create()
    {
        return view('content.admin.pimpinanprof.create');
    }
    function store()
    {
        $pimpinanprof = new Pimpinanprof();
        $pimpinanprof->nama = request('nama');
        $pimpinanprof->jabatan = request('jabatan');
        $pimpinanprof->email = request('email');
        $pimpinanprof->handleUploadFoto();
        $pimpinanprof->save();

        return redirect('admin/pimpinanprof')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Pimpinanprof $pimpinanprof)
    {
        $data['pimpinanprof'] = $pimpinanprof;
        return view('content.admin.pimpinanprof.show', $data);
    }

    function edit(Pimpinanprof $pimpinanprof)
    {
        $data['pimpinanprof'] =  $pimpinanprof;
        return view('content.admin.pimpinanprof.edit', $data);
    }
    function update(Pimpinanprof $pimpinanprof)
    {
        $pimpinanprof->nama = request('nama');
        $pimpinanprof->jabatan = request('jabatan');
        $pimpinanprof->email = request('email');
        $pimpinanprof->handleUploadFoto();
        $pimpinanprof->save();
        if (request('gambar')) $pimpinanprof->handleUploadFoto();
        return redirect('admin/pimpinanprof')->with('success', 'Data Berhasil Diedit');
    }
    function delete(Pimpinanprof $pimpinanprof)
    {
        $pimpinanprof->delete();
        $pimpinanprof->handleDeleteFoto();
        return redirect('admin/pimpinanprof')->with('danger', 'Data Berhasil Dihapus');
    }
}
