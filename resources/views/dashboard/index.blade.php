@extends('dashboard')

@section('topmenu')
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Totale voorraad</p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $totaleVoorraad }}</p>
        </div>
    </div>
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-blue-100 dark:bg-orange-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                ></path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Totale producten</p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $totaleProducten }}</p>
        </div>
    </div>
@endsection

@section('content')
    <div class="w-full overflow-x-auto">
        <div class="p-6 bg-white dark:bg-gray-800">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Artikelnummer</th>
                    <th class="px-4 py-3">Omschrijving</th>
                    <th class="px-4 py-3">Leverancier</th>
                    <th class="px-4 py-3">Artikelgroep</th>
                    <th class="px-4 py-3">Eenheid</th>
                    <th class="px-4 py-3">Prijs</th>
                    <th class="px-4 py-3">Aantal</th>
                    <th class="px-4 py-3">Actie</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($products as $product)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">{{ $product->artikelnummer }}</td>
                        <td class="px-4 py-3">{{ $product->omschrijving }}</td>
                        <td class="px-4 py-3">{{ $product->leverancier }}</td>
                        <td class="px-4 py-3">{{ $product->artikelgroep }}</td>
                        <td class="px-4 py-3">{{ $product->eenheid }}</td>
                        <td class="px-4 py-3">€ {{ number_format($product->prijs, 2, ',', '.') }}</td>
                        <td class="px-4 py-3">{{ $product->aantal }}</td>
                        <td class="px-4 py-2">
                            <div class="flex items-center gap-2">
                                {{-- Bewerken-knop --}}
                                <a href="{{ route('dashboard.edit', $product->id) }}" class="text-blue-500 hover:text-blue-700" title="Bewerk">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-5.586-9.414a2 2 0 112.828 2.828L11 14l-4 1 1-4 7.414-7.414z" />
                                    </svg>
                                </a>

                                {{-- Verwijderen-knop --}}
                                <form action="{{ route('dashboard.destroy', $product->id) }}" method="POST"
                                      class="inline-flex"
                                      onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 p-0 m-0 bg-transparent border-0" title="Verwijder">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-5 h-5"
                                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
