<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kurikulum;

class KurikulumController extends Controller
{
    function getDataKurikulum()
    {
        $data['list_kurikulum'] = Kurikulum::all();
        return view('content.admin.kurikulum.index', $data);
    }

    function create()
    {
        return view('content.admin.kurikulum.create');
    }

    function store()
    {

        $kurikulum = new Kurikulum();
        $kurikulum->nama = request('nama');
        $kurikulum->handleUploadFoto();
        $kurikulum->save();

        return redirect('kurikulum');
    }

    function show(Kurikulum $kurikulum)
    {
        $data['kurikulum'] = $kurikulum;
        return view('content.admin.kurikulum.show', $data);
    }

    function edit(Kurikulum $kurikulum)
    {
        $data['kurikulum'] = $kurikulum;
        return view('content.admin.kurikulum.edit', $data);
    }

    function update(Kurikulum $kurikulum)
    {
        $kurikulum->nama = request('nama');
        $kurikulum->handleUploadFoto();
        $kurikulum->save();

        //if (request('foto')) {
        //    $image = $this->handleUpload('foto');
        //    $kelas->foto = $image;}

        return redirect('kurikulum');
    }

    function delete(Kurikulum $kurikulum)
    {
        $kurikulum->delete();
        $kurikulum->handleDeleteFoto();
        return redirect('kurikulum');
    }
}
