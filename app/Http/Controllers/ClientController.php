<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function showHome()
    {
        $data['list_kegiatan'] = Kegiatan::all();
        return view('content.front.home', $data);
    }
}
