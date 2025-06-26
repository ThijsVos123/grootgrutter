@extends('dashboard')

@section('content')
    <div class="container mx-auto px-6 my-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Product bewerken</h2>

            <form action="{{ route('dashboard.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="artikelnummer" class="block text-sm text-gray-700 dark:text-gray-400">Artikelnummer</label>
                        <input id="artikelnummer" name="artikelnummer" type="text" value="{{ old('artikelnummer', $product->artikelnummer) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white" required>
                    </div>

                    <div>
                        <label for="omschrijving" class="block text-sm text-gray-700 dark:text-gray-400">Omschrijving</label>
                        <input id="omschrijving" name="omschrijving" type="text" value="{{ old('omschrijving', $product->omschrijving) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="leverancier" class="block text-sm text-gray-700 dark:text-gray-400">Leverancier</label>
                        <input id="leverancier" name="leverancier" type="text" value="{{ old('leverancier', $product->leverancier) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="artikelgroep" class="block text-sm text-gray-700 dark:text-gray-400">Artikelgroep</label>
                        <input id="artikelgroep" name="artikelgroep" type="text" value="{{ old('artikelgroep', $product->artikelgroep) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="eenheid" class="block text-sm text-gray-700 dark:text-gray-400">Eenheid</label>
                        <input id="eenheid" name="eenheid" type="text" value="{{ old('eenheid', $product->eenheid) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="prijs" class="block text-sm text-gray-700 dark:text-gray-400">Prijs (€)</label>
                        <input id="prijs" name="prijs" type="number" step="0.01" value="{{ old('prijs', $product->prijs) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="minvoorraad" class="block text-sm text-gray-700 dark:text-gray-400">Minimale Voorraad</label>
                        <input id="minvoorraad" name="minvoorraad" type="number" value="{{ old('minvoorraad', $product->minvoorraad) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label for="aantal" class="block text-sm text-gray-700 dark:text-gray-400">Aantal</label>
                        <input id="aantal" name="aantal" type="number" value="{{ old('aantal', $product->aantal) }}"
                               class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="md:col-span-2">
                        <label for="logs_reden" class="block text-sm text-gray-700 dark:text-gray-400">Reden voorraadwijziging</label>
                        <textarea id="logs_reden" name="logs_reden" rows="3"
                                  class="form-textarea mt-1 block w-full dark:bg-gray-700 dark:text-white"
                                  placeholder="Vul hier een reden in.">{{ old('logs_reden') }}</textarea>
                        @error('logs_reden')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-end mt-6 space-x-4">
                    <button type="submit"
                            class="px-5 py-2 bg-purple-600 text-white text-sm font-medium rounded-lg hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                        Opslaan
                    </button>
                    <a href="{{ route('dashboard.index') }}"
                       class="text-sm text-gray-600 dark:text-gray-400 hover:underline">
                        Annuleren
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
