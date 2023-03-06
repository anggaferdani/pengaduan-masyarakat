<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    public function semua(){
        $pengaduan = Pengaduan::with('users')->paginate();
        return view('back.pages.administrator.semua', compact('pengaduan'));
    }

    public function tanggapan($id){
        $pengaduan = Pengaduan::with('users')->find($id);
        $tanggapan = Tanggapan::with('pengaduans')->get();
        return view('back.pages.administrator.tanggapan', compact('pengaduan', 'tanggapan'));
    }

    public function simpan_tanggapan(Request $request, $id){
        $request->validate([
            'tanggapan' => 'required',
            'status_laporan_pengaduan' => 'required',
        ]);

        $pengaduan = Pengaduan::find($id);

        $pengaduan->update([
            'status_laporan_pengaduan' => $request->status_laporan_pengaduan,
        ]);

        $tanggapan = array(
            'pengaduan_id' => $pengaduan->id,
            'alamat_email_petugas' => auth()->user()->id,
            'tanggapan' => $request['tanggapan'],
        );

        Tanggapan::create($tanggapan);

        return redirect()->route('administrator.tanggapan', $id)->with('success', 'amsdna dmasndad smdasndasda');
    }
}
