<?php

namespace App\Http\Controllers\admin\publikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    function getDataKegiatan()
    {
        $data['list_kegiatan'] = Kegiatan::all();
        return view('content.admin.publikasi.kegiatan.index', $data);
    }
    function create()
    {
        return view('content.admin.publikasi.kegiatan.create');
    }
    function store()
    {
        $kegiatan = new Kegiatan();
        $kegiatan->nama = request('nama');
        $kegiatan->deskripsi = request('deskripsi');
        $kegiatan->handleUploadFoto();
        $kegiatan->save();

        return redirect('admin/kegiatan')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Kegiatan $kegiatan)
    {
        $data['kegiatan'] = $kegiatan;
        return view('content.admin.publikasi.kegiatan.show', $data);
    }

    function edit(Kegiatan $kegiatan)
    {
        $data['kegiatan'] =  $kegiatan;
        return view('content.admin.publikasi.kegiatan.edit', $data);
    }
    function update(Kegiatan $kegiatan)
    {
        $kegiatan->nama = request('nama');
        $kegiatan->deskripsi = request('deskripsi');
        $kegiatan->handleUploadFoto();
        $kegiatan->save();
        if (request('foto')) $kegiatan->handleUploadFoto();
        return redirect('admin/kegiatan')->with('success', 'Data Berhasil Diedit');
    }
    function delete(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        $kegiatan->handleDeleteFoto();

        return redirect('admin/kegiatan')->with('danger', 'Data Berhasil Dihapus');
    }
}
