@extends('bestellijst')

@section('topmenu')

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
                    <th class="px-4 py-3">Aantal</th>
                    <th class="px-4 py-3">Prijs</th>
                    <th class="px-4 py-3">Aantal te bestellen</th>
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
                        <td class="px-4 py-3">{{ $product->aantal }}</td>
                        <td class="px-4 py-3">€ {{ number_format($product->prijs, 2, ',', '.') }}</td>
                        <td class="px-4 py-3">
                            <form action="{{ route('bestellingen.store') }}" method="POST" class="flex items-center space-x-2">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="number" name="bestel_aantal" min="1" required
                                       class="w-15 px-2 py-1 border rounded-md dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        </td>
                        <td class="px-4 py-3">
                            <button type="submit"
                                    class="px-3 py-1 text-white bg-blue-600 rounded hover:bg-blue-700">
                                Bestel
                            </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
