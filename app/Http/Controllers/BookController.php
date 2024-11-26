<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\PinjamBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function informasi()
    {
        $loans = PinjamBuku::all();

        return view('books.informasi', compact('loans'));
    }
    public function index()
    {
        $books = book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'tahun_terbit' => 'required|integer',
            'jumlah_stok' => 'required|integer',
            'status' => 'required|boolean',
            'deskripsi' => 'required',
        ]);

        book::create($request->all());
            return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = book::findOrFail($id);
        return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    dd($request->all());  // Debug: cek apa yang diterima
    $request->validate([
        'judul_buku' => 'required',
        'penulis' => 'required',
        'kategori' => 'required',
        'tahun_terbit' => 'required|integer',
        'jumlah_stok' => 'required|integer',  // Pastikan ini sesuai dengan kolom di DB
        'status' => 'required|boolean',
        'deskripsi' => 'required',
    ]);

    $books = book::findOrFail($id);
    $books->update($request->all());
    return redirect('books');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = book::find($id);
        $books->delete();
        return redirect('books');
    }
}
