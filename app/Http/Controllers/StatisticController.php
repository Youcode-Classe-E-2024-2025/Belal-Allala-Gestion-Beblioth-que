<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Copy;
use App\Models\Borrow;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();
        $totalCopies = Copy::count();
        $totalBorrows = Borrow::count();
        $totalUsers = User::count();
        $availableCopies = Copy::where('status', 'available')->count();
        $borrowedCopies = Copy::where('status', 'borrowed')->count();

        return view('statistics.index', compact(
            'totalBooks',
            'totalCopies',
            'totalBorrows',
            'totalUsers',
            'availableCopies',
            'borrowedCopies'
        ));
    }
}