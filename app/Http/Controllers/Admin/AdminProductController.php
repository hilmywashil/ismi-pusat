<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            'product_name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('products', 'public');
        }

        Product::create($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product berhasil ditambahkan!');
    }

    // ================= EDIT =================
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    // ================= UPDATE =================
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'product_name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Jika upload gambar baru
        if ($request->hasFile('image')) {

            // Hapus gambar lama
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $validated['image'] = $request->file('image')
                ->store('products', 'public');
        }

        $product->update($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product berhasil diupdate!');
    }

    // ================= DELETE =================
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar dari storage
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product berhasil dihapus!');
    }
}