@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
            <i class="fas fa-book text-blue-500 mr-2"></i>
            Ajouter un Livre
        </h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                    <i class="fas fa-heading text-green-500 mr-2"></i>
                    Titre
                </label>
                <input type="text" name="title" id="title" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" required>
            </div>

            <div class="mb-6">
                <label for="author" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                    <i class="fas fa-user text-green-500 mr-2"></i>
                    Auteur
                </label>
                <input type="text" name="author" id="author" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" required>
            </div>

            <div class="mb-6">
                <label for="isbn" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                    <i class="fas fa-barcode text-green-500 mr-2"></i>
                    ISBN
                </label>
                <input type="text" name="isbn" id="isbn" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" required>
            </div>

            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                    <i class="fas fa-align-left text-green-500 mr-2"></i>
                    Description
                </label>
                <textarea name="description" id="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"></textarea>
            </div>

            <div class="mb-6">
                <label for="publication_date" class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                    <i class="fas fa-calendar-alt text-green-500 mr-2"></i>
                    Date de Publication
                </label>
                <input type="date" name="publication_date" id="publication_date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</div>
@endsection