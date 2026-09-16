<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = '', $npm = '', $kelas = '')
    {
        $data = [
            'nama' => $nama ?: 'Dhafa Denis Al Isyrafi',
            'npm' => $npm ?: '2457051014',
            'kelas' => $kelas ?: 'A',
        ];

        return view('profile', $data);
    }
}
