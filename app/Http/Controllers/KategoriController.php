<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('master.kategori.index', [
            'title' => 'List Kategori',
            'datatable' => true
        ]);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kategori'
        ];
        return view('master.kategori.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
        ]);

        try {
            $kategori = new Kategori();
            $kategori->nama = $request->nama;
            $kategori->slug = Str::slug($request->nama);

            // Check slug unique
            if (Kategori::where('slug', $kategori->slug)->exists()) {
                $kategori->slug = $kategori->slug . '-' . Str::random(5);
            }

            $kategori->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal membuat Kategori: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Kategori berhasi disimpan.');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('master.kategori.edit', [
            'data' => $kategori,
            'title' => 'Edit Kategori'
        ]);
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::findOrFail($id);
        $request->validate([
            'nama' => ['required', 'unique:kategoris,nama,' . $id],
        ]);

        try {
            $kategori->nama = $request->nama;
            $kategori->slug = Str::slug($request->nama);

            // Check slug unique
            if (Kategori::where('slug', $kategori->slug)->exists() && $kategori->id != Kategori::where('slug', $kategori->slug)->first()->id) {
                $kategori->slug = $kategori->slug . '-' . Str::random(5);
            }

            $kategori->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil mengubah data Kategori.');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        try {
            $kategori->delete();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus Kategori.');
    }
}
