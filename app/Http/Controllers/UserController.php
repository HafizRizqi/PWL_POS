<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function index()
    {
         $user = UserModel::findOrFail(1); // Mengambil data user dengan ID 1, jika tidak ditemukan akan menghasilkan error 404
        return view ('user',['data' => $user]); // Mengirim data user ke view 'user'
    }
}
