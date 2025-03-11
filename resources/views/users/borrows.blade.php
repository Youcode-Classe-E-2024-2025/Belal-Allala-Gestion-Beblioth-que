@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Historique des Emprunts de {{ $user->name }}</h1>

    <a href="{{ route('users.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-300 mb-4 inline-block">
        Retour à la liste des utilisateurs
    </a>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Livre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date d'Emprunt</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date de Retour</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($borrows as $borrow)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $borrow->copy->book->title }} (Barcode: {{ $borrow->copy->barcode }})</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $borrow->borrow_date }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $borrow->return_date }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            @if (!$borrow->return_date)
                                <form action="{{ route('borrows.return', $borrow->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600 transition duration-300">Retourner</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection