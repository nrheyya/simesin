<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dosenprof;
use Illuminate\Http\Request;

class DosenprofController extends Controller
{
    function getDataDosenprof()
    {
        $data['list_dosenprof'] = Dosenprof::all();
        return view('content.admin.dosenprof.index', $data);
    }
    function create()
    {
        return view('content.admin.dosenprof.create');
    }
    function store()
    {
        $dosenprof = new Dosenprof();
        $dosenprof->nama = request('nama');
        $dosenprof->bidang = request('bidang');
        $dosenprof->email = request('email');
        $dosenprof->handleUploadFoto();
        $dosenprof->save();

        return redirect('admin/dosenprof')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Dosenprof $dosenprof)
    {
        $data['dosenprof'] = $dosenprof;
        return view('content.admin.dosenprof.show', $data);
    }

    function edit(Dosenprof $dosenprof)
    {
        $data['dosenprof'] =  $dosenprof;
        return view('content.admin.dosenprof.edit', $data);
    }
    function update(Dosenprof $dosenprof)
    {
        $dosenprof->nama = request('nama');
        $dosenprof->bidang = request('bidang');
        $dosenprof->email = request('email');
        $dosenprof->handleUploadFoto();
        $dosenprof->save();
        if (request('foto')) $dosenprof->handleUploadFoto();
        return redirect('admin/dosenprof')->with('success', 'Data Berhasil Diedit');
    }
    function delete(Dosenprof $dosenprof)
    {
        $dosenprof->delete();

        $dosenprof->handleDeleteFoto();

        return redirect('admin/dosenprof')->with('danger', 'Data Berhasil Dihapus');
    }
}
