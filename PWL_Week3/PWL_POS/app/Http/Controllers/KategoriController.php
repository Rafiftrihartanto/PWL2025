<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;

class KategoriController extends Controller 
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'kodeKategori' => 'required|string|max:255|unique:m_kategori,kategori_kode',
        'namaKategori' => 'required|string|max:255',
    ]);

    KategoriModel::create([
        'kategori_kode' => $request->kodeKategori,
        'kategori_nama' => $request->namaKategori,
    ]);

    return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan!');
}

}