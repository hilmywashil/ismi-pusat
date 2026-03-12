<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class AdminKontakController extends Controller
{
    public function index()
    {
        $pesan = Kontak::get();

        return view('admin.kontak.index', compact('pesan'));
    }

    public function deleteMessage($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();

        return redirect()->back()->with('success', 'Pesan telah dihapus!');
    }

}
