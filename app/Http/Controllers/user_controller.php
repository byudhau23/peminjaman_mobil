<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index',[
            'user' => $user
        ]);
    }

    public function create(){
        $user = User::all();
        return view('admin.user.create', [
            'user' => $user
        ]);
    }

    public function store(Request $request){
        // Melakukan validasi data form
        $request->validate([
            'nama' => 'required | string',
            'email' => 'required | unique',
            'password' => 'required | integer',
        ]);


       //Insert data ke table user
       User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
       ]);

       return redirect('/user');
    }

    public function edit($id){
        //Mendapatkan user berdasarkan id
        $user = User::find($id);
        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }

    //Method untuk update user
    public function update($id, Request $request){
        // Melakukan validasi data form
        $validatedData = $request->validate([
            'nama' => 'required | string',
            'email' => 'required | unique',
            'password' => 'required | integer',
        ]);

        //cari user yang akan di update
        $user = User::find($id);

        //Update user berdasarkan data validasi
        $user->update($validatedData);

        //kembalikan ke alamat user
        return redirect('/user')->with('success', 'Data user berhasil diubah.');
    }

    // method untuk hapus user
    public function destroy(Request $request){
        User::destroy($request->id);

        //kembalikan ke halaman daftar user
        return redirect('/user')->with('success', 'Data user berhasil dihapus.');
    }
}