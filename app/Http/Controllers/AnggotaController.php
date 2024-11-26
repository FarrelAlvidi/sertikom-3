<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\pinjamBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::all();
        return view('anggota.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Use where() directly to filter the loans for the authenticated user
        $loans = pinjamBuku::where('user_id', Auth::id())->get();

        return view('anggota.create', compact('loans'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
        ]);

        $book = Book::findOrFail($request->book_id);
        // Cek ketersediaan buku
        if (!$book->status) {
            return back();
        }
        // Buat peminjaman
        pinjamBuku::create([
            'user_id' => Auth::id(), //Auth::id(),
            'book_id' => $book->id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'borrowed',
        ]);
        // Perbarui status buku
        $book->update([
            'status' => false, // Buku tidak tersedia
            'loan_status' => 'borrowed', // Buku sedang dipinjam
        ]);

        return redirect()->back()->with('success', 'Buku berhasil dipinjam.');
    }

    public function returnBook($loanId)
    {
        $loan = pinjamBuku::findOrFail($loanId);
        $book = $loan->book;

        // Update status buku
        $book->update([
            'status' => true, // Buku tersedia
            'loan_status' => 'returned', // Buku sudah dikembalikan
        ]);

        // Update status peminjaman
        $loan->update([
            'status' => 'returned',
            'tanggal_kembali' => now(),
        ]);

        return redirect()->back()->with('success', 'Buku berhasil dikembalikan.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
