<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function cetak_banyak_petugas(){
        $petugas_dari_controller = User::all();
        $pdf = PDF::loadView('back.pages.pdf.cetak-banyak-petugas', compact('petugas_dari_controller'));
        return $pdf->download('petugas'.date('m/d/Y').'.pdf');
        // return $pdf->stream();
        // return view('back.pages.pdf.cetak-laporan-pengaduan', compact('tanggapan'));
    }

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

    public function simpan_perubahan_petugas(Request $request, $id){
        $request->validate([
            'nama_panjang' => 'required',
            'telepon' => 'required',
            'email' => 'required|email',
            'status_akun_yang_digunakan' => 'required',
        ]);

        $petugas = User::find($id);

        $petugas->update([
            'nama_panjang' => $request->nama_panjang,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'status_akun_yang_digunakan' => $request->status_akun_yang_digunakan,
        ]);

        return redirect()->route('administrator.ubah', $id)->with('success', 'Data berhasil diperbaharui');
    }

    public function hapus_petugas($id){
        $petugas = User::find($id);

        $petugas->update([
            'status_aktif' => 2,
        ]);

        return redirect()->route('administrator.petugas')->with('fail', 'amsdna dmasndad smdasndasda');
    }
}
