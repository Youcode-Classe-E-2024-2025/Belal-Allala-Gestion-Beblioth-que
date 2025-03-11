@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white shadow-2xl rounded-lg overflow-hidden">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 p-8">
            <h1 class="text-4xl font-bold text-white">Mon Profil</h1>
            <p class="text-gray-200 mt-2">Bienvenue dans votre espace personnel</p>
        </div>

        
        <div class="p-8">
            <div class="space-y-6">
                <div class="flex items-center space-x-6">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-full shadow-md">
                        <i class="fas fa-user text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Nom</p>
                        <p class="text-xl font-semibold text-gray-800">{{ $user->name }}</p>
                    </div>
                </div>

                <div class="flex items-center space-x-6">
                    <div class="w-12 h-12 flex items-center justify-center bg-blue-100 rounded-full shadow-md">
                        <i class="fas fa-envelope text-blue-600 text-xl"></i>
                        </div>
                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <p class="text-xl font-semibold text-gray-800">{{ $user->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-gray-50 border-t border-gray-200">
                    <div class="space-y-6">
                        <a href="{{ route('profile.borrows') }}" class="w-full flex items-center justify-center px-6 py-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 transition duration-300">
                            <i class="fas fa-history text-blue-600 text-xl mr-3"></i>
                            <span class="text-lg font-medium text-gray-700">Mon Historique d'Emprunts</span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="w-full flex items-center justify-center px-6 py-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 transition duration-300">
                                <i class="fas fa-sign-out-alt text-red-600 text-xl mr-3"></i>
                                <span class="text-lg font-medium text-gray-700">Déconnexion</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection