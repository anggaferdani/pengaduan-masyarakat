<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(){
        return view('back.pages.authentications.login');
    }

    public $email, $password;

    public function postlogin(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        $creds = array(
            'email' => $input['email'],
            'password' => $input['password'],
        );

        if(Auth::guard('web')->attempt($creds)){
            if(auth()->user()->status_aktif == 1){
                if(auth()->user()->level == 1){
                    return redirect()->route('administrator.semua');
                }elseif(auth()->user()->level == 2){
                    return redirect()->route('petugas.dashboard');
                }elseif(auth()->user()->level == 3){
                    return redirect()->route('user.create');
                }
            }elseif(auth()->user()->status_akun_yang_digunakan == 2){
                Auth::guard('web')->logout();
                return redirect()->route('login')->with('fail', 'Akun telah dihapus. hubungi pihak terkait');
            }elseif(auth()->user()->status_aktif == 2){
                Auth::guard('web')->logout();
                return redirect()->route('login')->with('fail', 'Akun telah ditangguhkan. hubungi pihak terkait');
            }else{
                return redirect()->route('login')->with('fail', 'Akun telah ditangguhkan.');
            }
        }else{
            return redirect()->route('login')->with('fail', 'Email/Password yang digunakan untuk login salah. coba lagi');
        }
    }

    public function register(){
        return view('back.pages.authentications.register');
    }

    public function postregister(Request $request){
        $request->validate([
            'nik' => 'required|unique:users,nik',
            'nama_panjang' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|unique:users,telepon',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        $user = array(
            'nik' => $request['nik'],
            'nama_panjang' => $request['nama_panjang'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'alamat' => $request['alamat'],
            'telepon' => $request['telepon'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        );

        User::create($user);

        return redirect()->route('login')->with('success', 'Pembuatan akun berhasil');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
