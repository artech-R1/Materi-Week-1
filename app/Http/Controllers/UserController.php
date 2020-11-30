<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;

class UserController extends Controller
{

    function index()
    {
        $data['list_user'] = User::all();
        return view('admin.user', $data);
    }

    function create()
    {
       
    }

    function store()
    {
         }

    function show(User $user)
    {
        $data['user'] = $user;
        return view('admin.show', $data);
    }

    function edit(User $user)
    {
        $data['user'] = $user;
        return view('admin.edit', $data);
    }

    function update(User $user)
    {
        $user->nama = request('nama');
        $user->email = request('email');
        if (request('password')) $user->password = bcrypt(request('password'));


        return redirect('admin/user')->with('success', 'Data berhasil disimpan');
    }

    function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', 'Data berhasil hapus');;
    }
}
