<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function petugas(){
        $petugas_dari_controller = User::all();
        return view('back.pages.petugas.index', compact('petugas_dari_controller'));
    }

    public function postpetugas(Request $request){
        $request->validate([
            'nama_panjang' => 'required',
            'telepon' => 'required|unique:users,telepon',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $petugas = array(
            'nama_panjang' => $request['nama_panjang'],
            'telepon' => $request['telepon'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'level' => 2,
        );

        User::create($petugas);

        return redirect()->route('administrator.petugas')->with('success', 'Data berhasil ditambahkan');
    }

    public function ubah(Request $request, $id){
        $petugas = User::find($id);
        return view('back.pages.petugas.ubah', compact('petugas'));
    }
}
