<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Copy;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bookId = $request->query('book');
        $book = null; 

        if ($bookId) {
            $copies = Copy::where('book_id', $bookId)->get();
            $book = Book::find($bookId); 
        } else {
            $copies = Copy::all();
        }

        $books = Book::all();
        return view('copies.index', compact('copies', 'books', 'bookId', 'book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::all(); 
        return view('copies.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id', // Vérifier que le livre existe
            'status' => 'required|in:available,borrowed,damaged,lost',
            'barcode' => 'required|unique:copies',
            'acquisition_date' => 'nullable|date',
        ]);

        Copy::create($request->all());

        return redirect()->route('copies.index')
                        ->with('success', 'Copie créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Copy $copy)
    {
        return view('copies.show', compact('copy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Copy $copy)
    {
        $books = Book::all(); // Récupérer tous les livres pour la liste déroulante
        return view('copies.edit', compact('copy', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Copy $copy)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'status' => 'required|in:available,borrowed,damaged,lost',
            'barcode' => 'required|unique:copies,barcode,'.$copy->id, // Ignorer le barcode de la copie actuelle
            'acquisition_date' => 'nullable|date',
        ]);

        $copy->update($request->all());

        return redirect()->route('copies.index')
                        ->with('success', 'Copie mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Copy $copy)
    {
        $copy->delete();
        return redirect()->route('copies.index')->with('success', 'Copie supprimée avec succès.');
    }
}
