@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Liste des Copies</h1>

    <form action="{{ route('copies.index') }}" method="GET" class="mb-6">
        <div class="flex items-center">
            <label for="book" class="mr-2 text-gray-700 font-medium">Sélectionner un livre :</label>
            <select name="book" id="book" class="form-select rounded-lg border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" onchange="this.form.submit()">
                <option value="">Tous les livres</option>
                @foreach ($books as $b)
                    <option value="{{ $b->id }}" {{ $bookId == $b->id ? 'selected' : '' }}>{{ $b->title }}</option>
                @endforeach
            </select>
        </div>
    </form>

    @auth
        @if (Auth::user()->isAdmin())
            <a href="{{ route('copies.create') }}" class="text-blue-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition duration-300 mb-6 inline-block">
                Ajouter une Copie
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Livre</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Barcode</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($copies as $copy)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $copy->book->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $copy->status }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $copy->barcode }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <a href="{{ route('copies.show', $copy->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition duration-300 mr-2">
                                Voir
                            </a>

                            @auth
                                @if (Auth::user()->isAdmin())
                                    <a href="{{ route('copies.edit', $copy->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 transition duration-300 mr-2">
                                        Modifier
                                    </a>

                                    <form action="{{ route('copies.destroy', $copy->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition duration-300" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette copie ?')">
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