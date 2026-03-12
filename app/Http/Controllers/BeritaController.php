<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $beritaUtamaQuery = Berita::active()->latestPublish();

        if ($search) {
            $beritaUtamaQuery->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%{$search}%")
                    ->orWhere('konten', 'like', "%{$search}%");
            });
        }

        $beritaUtama = $beritaUtamaQuery->first();

        $beritas = Berita::active()
            ->where('category', 'berita')
            ->latestPublish()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($query) use ($search) {
                    $query->where('judul', 'like', "%{$search}%")
                        ->orWhere('konten', 'like', "%{$search}%");
                });
            })
            ->paginate(1);

        $beritaPopuler = Berita::active()
            ->where('category', 'berita')
            ->populer()
            ->latestPublish()
            ->take(5)
            ->get();

        $beritaTerbaru = Berita::active()
            ->where('category', 'berita')
            ->latestPublish()
            ->take(5)
            ->get();

        return view('pages.berita', compact(
            'beritaUtama',
            'beritas',
            'beritaPopuler',
            'beritaTerbaru',
            'search'
        ));
    }

    public function kegiatan()
    {
        $kegiatan = Berita::active()
            ->where('category', 'kegiatan')
            ->latestPublish()
            ->paginate(12);

        $kegiatanLainnya = Berita::active()
            ->where('category', 'kegiatan')
            ->latestPublish()
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('pages.kegiatan', compact('kegiatan', 'kegiatanLainnya'));
    }

    public function show($slug)
    {
        $berita = Berita::active()->where('slug', $slug)->firstOrFail();

        // Increment views
        $berita->incrementViews();

        // Berita populer (5 terbaru, exclude current)
        $beritaPopuler = Berita::active()
            ->populer()
            ->where('id', '!=', $berita->id)
            ->latestPublish()
            ->take(5)
            ->get();

        // Berita terbaru (5 terbaru, exclude current)
        $beritaTerbaru = Berita::active()
            ->where('id', '!=', $berita->id)
            ->latestPublish()
            ->take(5)
            ->get();

        return view('pages.details.berita-detail', compact(
            'berita',
            'beritaPopuler',
            'beritaTerbaru'
        ));
    }
}