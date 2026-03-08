<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function index()
    {

        $user = UserModel::with('level')->get();
        dd($user);
        
       //$user = UserModel::all(); // Mengambil semua data user dari database
        //return view ('user',['data' => $user]); // Mengirim data user ke view 'user'
    }

        public function tambah()
        {
            return view('user_tambah'); // Menampilkan form tambah user
        }

    public function tambah_simpan(Request $request)
    {
    UserModel::create([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make('$request->password'),
        'level_id' => $request->level_id
    ]);

    return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id); // Mencari data user berdasarkan ID

        return view('user_ubah', ['data' => $user]); // Mengirim data user ke view 'user_ubah'
    }
    public function ubah_simpan($id, Request $request)
    {
    $user = UserModel::find($id);

    $user->username = $request->username;
    $user->nama = $request->nama;
    $user->password = Hash::make('$request->password');
    $user->level_id = $request->level_id;

    $user->save();

    return redirect('/user');
    }
    public function hapus($id)
    {
    $user = UserModel::find($id);
    $user->delete();

    return redirect('/user');
    }   
}
