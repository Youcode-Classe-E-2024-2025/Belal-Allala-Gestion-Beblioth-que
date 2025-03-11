@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl rounded-lg overflow-hidden">
        <div class="px-6 py-8 sm:p-10">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Bienvenue à la Bibliothèque !</h1>
            <p class="text-lg text-gray-700 mb-8">Un espace pour gérer vos livres, copies et emprunts avec facilité.</p>

            <!-- Section des services -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <i class="fas fa-book-open text-orange-500 text-4xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Explorez Notre Collection</h3>
                        <p class="text-gray-600">Découvrez des milliers de titres passionnants.</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <i class="fas fa-hand-holding text-green-500 text-4xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Empruntez Facilement</h3>
                        <p class="text-gray-600">Empruntez et retournez des livres en quelques clics.</p>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200">

            <!-- Section des statistiques -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Notre Bibliothèque en Chiffres</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <i class="fas fa-book text-5xl text-blue-500 mb-4"></i>
                        <p class="text-2xl font-bold text-gray-800">10,000+</p>
                        <p class="text-gray-600">Livres Disponibles</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <i class="fas fa-users text-5xl text-purple-500 mb-4"></i>
                        <p class="text-2xl font-bold text-gray-800">5,000+</p>
                        <p class="text-gray-600">Membres Actifs</p>
                    </div>
                    <div class="text-center p-6 bg-gray-50 rounded-lg">
                        <i class="fas fa-clock text-5xl text-green-500 mb-4"></i>
                        <p class="text-2xl font-bold text-gray-800">24/7</p>
                        <p class="text-gray-600">Accès en Ligne</p>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200">

            <!-- Section des témoignages -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Ce Que Disent Nos Membres</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-6 bg-gray-50 rounded-lg">
                        <p class="text-gray-700 italic">"Cette bibliothèque a changé ma façon de lire. La collection est incroyable et le service est impeccable !"</p>
                        <p class="text-gray-900 font-semibold mt-4">— Marie Dupont</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg">
                        <p class="text-gray-700 italic">"Emprunter des livres n'a jamais été aussi simple. Je recommande vivement cette bibliothèque !"</p>
                        <p class="text-gray-900 font-semibold mt-4">— Jean Martin</p>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200">

            <!-- Section des événements à venir -->
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Événements à Venir</h2>
                <div class="space-y-4">
                    <div class="p-6 bg-gray-50 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800">Club de Lecture</h3>
                        <p class="text-gray-600">Rejoignez-nous pour une discussion sur le dernier best-seller.</p>
                        <p class="text-gray-500 text-sm mt-2">15 Octobre 2023 - 18h00</p>
                    </div>
                    <div class="p-6 bg-gray-50 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800">Atelier d'Écriture</h3>
                        <p class="text-gray-600">Apprenez les techniques d'écriture créative avec des auteurs renommés.</p>
                        <p class="text-gray-500 text-sm mt-2">22 Octobre 2023 - 14h00</p>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200">

            <!-- Section des boutons d'action -->
            <p class="text-gray-600 mb-6">Connectez-vous ou inscrivez-vous pour accéder à toutes les fonctionnalités.</p>
            <div class="flex justify-center space-x-4">
                @auth
                    <a href="{{ route('books.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-orange-500 hover:bg-orange-700">
                        <i class="fas fa-book mr-2"></i>
                        Voir les Livres
                    </a>
                    @if (Auth::user()->isAdmin())
                        <a href="{{ route('users.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-800 hover:bg-gray-900">
                            <i class="fas fa-users-cog mr-2"></i>
                            Gestion des Utilisateurs
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-orange-500 hover:bg-orange-700">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        Se Connecter
                    </a>
                    <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gray-800 hover:bg-gray-900">
                        <i class="fas fa-user-plus mr-2"></i>
                        S'Inscrire
                    </a>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection