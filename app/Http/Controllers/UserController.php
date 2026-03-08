<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function index()
    {
        $user = UserModel::firstWhere('level_id',1); // Mengambil data user dengan level_id 1 dari tabel m_user
        return view ('user',['data' => $user]); // Mengirim data user ke view 'user'
    }
}
