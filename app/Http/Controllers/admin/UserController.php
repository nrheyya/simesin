<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    function getDataUser()
    {
        $data['list_user'] = User::all();
        return view('content.admin.user.index', $data);
    }

    function create()
    {
        return view('content.admin.user.create');
    }

    function store()
    {
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    function show(User $user)
    {
        $data['user'] = $user;
        return view('content.admin.user.show', $data);
    }

    function edit(User $user)
    {
        $data['user'] = $user;
        return view('content.admin.user.edit', $data);
    }

    function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    function delete(User $user)
    {
        $user->delete();

        return redirect('admin/user');
    }
}
