<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function sendContact(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'subjek' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Kontak::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'nomor_telepon' => $request->nomor_telepon,
            'subjek' => $request->subjek,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');

    }
}