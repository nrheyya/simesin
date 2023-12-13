<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Pimpinanprof;
use Illuminate\Http\Request;

class PimpinanController extends Controller
{
    function showPimpinan()
    {
        $data['list_pimpinan'] = Pimpinanprof::all();
        return view('content.front.pimpinan', $data);
    }
}
