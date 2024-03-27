<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create(): View
    {
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate();

        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode', 'kategori_nama']);

        return redirect('/kategori');
    }

    // public function edit(int $kategori_id)
    // {
    //     $kategori = KategoriModel::findOrFail($kategori_id);

    //     return view('kategori.edit', compact('kategori'));
    // }

    // public function update(Request $request, int $kategori_id)
    // {
    //     $validatedData = $request->validate([
    //         'kodeKategori' => 'required|string',
    //         'namaKategori' => 'required|string',
    //     ]);

    //     $kategori = KategoriModel::findOrFail($kategori_id);
    //     $kategori->kategori_kode = $validatedData['kodeKategori'];
    //     $kategori->kategori_nama = $validatedData['namaKategori'];
    //     $kategori->save();

    //     return redirect('/kategori');
    // }

    // public function delete(Request $request, $kategori_id)
    // {
    //     // Temukan kategori berdasarkan ID
    //     $kategori = KategoriModel::find($kategori_id);

    //     // Periksa apakah kategori ditemukan
    //     if (!$kategori) {
    //         // Jika tidak ditemukan, kirimkan respons error
    //         return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
    //     }

    //     // Lakukan penghapusan kategori
    //     $kategori->delete();

    //     // Kirimkan respons berhasil
    //     return response()->json(['message' => 'Kategori berhasil dihapus'], 200);
    // }
}
