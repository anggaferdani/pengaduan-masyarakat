<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function hanya_pengaduan_mu(){
        $pengaduan = Pengaduan::with('users')->paginate();
        return view('back.pages.masyarakat.hanya-pengaduan-mu', compact('pengaduan'));
    }

    public function semua(){
        $pengaduan = Pengaduan::with('users')->paginate();
        return view('back.pages.masyarakat.semua', compact('pengaduan'));
    }

    public function pengaduan($id){
        $pengaduan = Pengaduan::with('users')->find($id);
        return view('back.pages.masyarakat.pengaduan', compact('pengaduan'));
    }

    public function create(){
        return view('back.pages.masyarakat.create');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'tanggal_pengaduan' => 'required',
            'lampiran' => 'nullable',
            'status_publikasi' => 'required',
        ]);

        $pengaduan = array(
            'user_id' => Auth::id(),
            'judul' => $request['judul'],
            'keterangan' => $request['keterangan'],
            'tanggal_pengaduan' => $request['tanggal_pengaduan'],
            'status_publikasi' => $request['status_publikasi'],
            'alamat_email_pelapor' => auth()->user()->email,
        );

        if($lampiran = $request->file('lampiran')){
            $destination_path = 'lampiran/';
            $lampiran_pengaduan = date('YmdHis') . "." . $lampiran->getClientOriginalExtension();
            $lampiran->move($destination_path, $lampiran_pengaduan);
            $pengaduan['lampiran'] = $lampiran_pengaduan;
        }

        Pengaduan::create($pengaduan);

        return redirect()->route('user.create')->with('success', 'amsdna dmasndad smdasndasda');
    }

    public function simpan_perubahan(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'tanggal_pengaduan' => 'required',
            'lampiran' => 'nullable',
        ]);

        $pengaduan = Pengaduan::find($id);

        $pengaduan->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'tanggal_pengaduan' => $request->tanggal_pengaduan,
        ]);

        return redirect()->route('user.pengaduan', $id)->with('success', 'amsdna dmasndad smdasndasda');
    }

    public function hapus_pengaduan($id){
        $pengaduan = Pengaduan::find($id);

        $pengaduan->update([
            'status_aktif' => 2,
        ]);

        return redirect()->route('user.hanya-pengaduan-mu')->with('fail', 'amsdna dmasndad smdasndasda');
    }
}
