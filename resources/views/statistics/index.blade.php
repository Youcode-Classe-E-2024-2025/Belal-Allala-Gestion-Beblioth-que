@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Statistiques de la Bibliothèque</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Nombre Total de Livres -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6 flex items-center">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-gray-600 mr-4">
                    <i class="fas fa-book text-2xl"></i>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Nombre Total de Livres</h5>
                    <p class="text-2xl text-gray-800">{{ $totalBooks }}</p>
                </div>
            </div>
        </div>

        <!-- Nombre Total de Copies -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6 flex items-center">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-gray-600 mr-4">
                    <i class="fas fa-copy text-2xl"></i>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Nombre Total de Copies</h5>
                    <p class="text-2xl text-gray-800">{{ $totalCopies }}</p>
                </div>
            </div>
        </div>

        <!-- Nombre Total d'Emprunts -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6 flex items-center">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-gray-600 mr-4">
                    <i class="fas fa-hand-holding text-2xl"></i>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Nombre Total d'Emprunts</h5>
                    <p class="text-2xl text-gray-800">{{ $totalBorrows }}</p>
                </div>
            </div>
        </div>

        <!-- Nombre Total d'Utilisateurs -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6 flex items-center">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-gray-600 mr-4">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Nombre Total d'Utilisateurs</h5>
                    <p class="text-2xl text-gray-800">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>

        <!-- Copies Disponibles -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6 flex items-center">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-gray-600 mr-4">
                    <i class="fas fa-check-circle text-2xl"></i>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Copies Disponibles</h5>
                    <p class="text-2xl text-gray-800">{{ $availableCopies }}</p>
                </div>
            </div>
        </div>

        <!-- Copies Empruntées -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow duration-300">
            <div class="p-6 flex items-center">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-gray-600 mr-4">
                    <i class="fas fa-times-circle text-2xl"></i>
                </div>
                <div>
                    <h5 class="text-lg font-semibold text-gray-700">Copies Empruntées</h5>
                    <p class="text-2xl text-gray-800">{{ $borrowedCopies }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection