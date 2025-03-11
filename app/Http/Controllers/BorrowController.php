<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Copy;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::whereNull('return_date')->get(); 
        return view('borrows.index', compact('borrows'));
    }

    public function create()
    {
        $users = User::all();
        $copies = Copy::where('status', 'available')->get(); 
        return view('borrows.create', compact('users', 'copies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'copy_id' => 'required|exists:copies,id|unique:borrows,copy_id,NULL,id,return_date,NULL',
            'borrow_date' => 'required|date',
        ]);

        $copy = Copy::findOrFail($request->copy_id);

        if ($copy->status != 'available') {
            return back()->withErrors(['copy_id' => 'Cette copie n\'est pas disponible.']);
        }

        $borrow = Borrow::create($request->all());

        $copy->update(['status' => 'borrowed']); // Mettre à jour le statut de la copie

        return redirect()->route('borrows.index')
                        ->with('success', 'Emprunt enregistré avec succès.');
    }

    public function returnBook(Request $request, Borrow $borrow)
    {
        $copy = Copy::findOrFail($borrow->copy_id);

        $borrow->update(['return_date' => now()]);

        $copy->update(['status' => 'available']); 

        return redirect()->route('borrows.index')->with('success', 'Retour enregistré avec succès.');
    }

    public function userBorrows()
    {
        $user = Auth::user();
        $borrows = Borrow::where('user_id', $user->id)->get(); 
        return view('borrows.user_borrows', compact('borrows'));
    }

}
