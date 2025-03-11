@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Copie de "{{ $copy->book->title }}"</h1>

    <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
        <div class="mb-4">
            <strong class="text-gray-700 font-medium">Statut:</strong>
            <span class="text-gray-800">{{ $copy->status }}</span>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700 font-medium">Barcode:</strong>
            <span class="text-gray-800">{{ $copy->barcode }}</span>
        </div>

        <div>
            <strong class="text-gray-700 font-medium">Date d'Acquisition:</strong>
            <span class="text-gray-800">{{ $copy->acquisition_date }}</span>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('copies.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
            Retour à la liste
        </a>
        @auth
            @if (Auth::user()->isAdmin())
                <a href="{{ route('copies.edit', $copy->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition duration-300 ml-2">
                    Modifier
                </a>
            @endif
        @endauth
    </div>
</div>
@endsection