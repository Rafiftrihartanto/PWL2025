<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Hitung jumlah pengguna dengan level_id = 2
        $jumlah_pengguna = UserModel::where('level_id', 2)->count();

        // Kirim data ke view
        return view('user', compact('jumlah_pengguna'));
    }
}
