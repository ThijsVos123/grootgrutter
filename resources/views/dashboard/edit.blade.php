@extends('dashboard')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md dark:bg-gray-800 mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-4">Product bewerken</h2>

        <form action="{{ route('dashboard.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Artikelnummer</label>
                    <input type="text" name="artikelnummer" value="{{ old('artikelnummer', $product->artikelnummer) }}" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Omschrijving</label>
                    <input type="text" name="omschrijving" value="{{ old('omschrijving', $product->omschrijving) }}" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Leverancier</label>
                    <input type="text" name="leverancier" value="{{ old('leverancier', $product->leverancier) }}" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Artikelgroep</label>
                    <input type="text" name="artikelgroep" value="{{ old('artikelgroep', $product->artikelgroep) }}" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Eenheid</label>
                    <input type="text" name="eenheid" value="{{ old('eenheid', $product->eenheid) }}" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Prijs (€)</label>
                    <input type="number" name="prijs" step="0.01" value="{{ old('prijs', $product->prijs) }}" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Aantal</label>
                    <input type="number" name="aantal" value="{{ old('aantal', $product->aantal) }}" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white">
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Opslaan
                </button>
                <a href="{{ route('dashboard') }}" class="ml-4 text-gray-600 hover:underline">Annuleren</a>
            </div>
        </form>
    </div>
@endsection
