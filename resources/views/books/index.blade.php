@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Liste des Livres</h1>

    @auth
        @if (Auth::user()->isAdmin())
            <a href="{{ route('books.create') }}" class="text-blue-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300 mb-6 inline-block">
                Ajouter un Livre
            </a>
        @endif
    @endauth

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Auteur</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ISBN</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($books as $book)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $book->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $book->author }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $book->isbn }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <!-- Bouton Voir -->
                            <a href="{{ route('books.show', $book->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition duration-300 mr-2">
                                Voir
                            </a>

                            <!-- Boutons Modifier et Supprimer (visibles uniquement pour les admins) -->
                            @auth
                                @if (Auth::user()->isAdmin())
                                    <!-- Bouton Modifier -->
                                    <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 transition duration-300 mr-2">
                                        Modifier
                                    </a>

                                    <!-- Bouton Supprimer -->
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition duration-300" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?')">
                                            Supprimer
                                        </button>
                                    </form>
                                @endif
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection