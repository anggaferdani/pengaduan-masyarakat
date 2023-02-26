<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

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

        return redirect()->route('register');
    }
}
