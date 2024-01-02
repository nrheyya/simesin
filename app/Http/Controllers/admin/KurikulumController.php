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
        $kurikulum->semester = request('semester');
        $kurikulum->handleUploadFoto();
        $kurikulum->save();

        return redirect('admin/kurikulum');
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
        $kurikulum->semester = request('semester');
        $kurikulum->handleUploadFoto();
        $kurikulum->save();
        if (request('gambar')) $kurikulum->handleUploadFoto();
        return redirect('admin/kurikulum');
    }

    function delete(Kurikulum $kurikulum)
    {
        $kurikulum->delete();
        $kurikulum->handleDeleteFoto();
        return redirect('admin/kurikulum');
    }
}
