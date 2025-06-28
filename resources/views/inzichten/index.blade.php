@extends('inzichten')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">

        {{-- Blok 1: CSV Import --}}
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <form action="{{ route('inzichten.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="text-sm text-gray-700 dark:text-gray-300" for="csv_file">CSV-bestand:</label>
                <input class="text-sm text-gray-700 dark:text-gray-300" type="file" name="csv_file" id="csv_file" required>
                <button class="px-5 py-2 bg-purple-600 text-white text-sm font-medium rounded-lg hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit">Importeer CSV</button>
            </form>
        </div>

        @if (session('success'))
            <div class="text-green-600 mt-2">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="text-red-600 mt-2">
                <strong>Fout:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Blok 2: Inzichten Voorraadwijzigingen --}}
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Voorraadwijzigingen</h2>
            <ul class="space-y-2">
                @foreach($logs as $log)
                    <li class="text-sm text-gray-700 dark:text-gray-300">
                        {{ $log->product->naam ?? 'Onbekend product' }}
                        van {{ $log->oudvoorraad ?? '?' }} naar {{ $log->nieuwvoorraad ?? '?' }}
                        @if ($log->reden)
                            - reden: {{ $log->reden }}
                        @endif
                        @if ($log->user)
                            - {{ $log->user->name }}
                        @endif
                         ({{ $log->created_at->format('d-m-Y H:i') }})
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Blok 3: Overzicht Bestellingen --}}
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Bestellingen</h2>
            <ul class="space-y-2">
                @foreach($bestellingen as $bestelling)
                    <li class="text-sm text-gray-700 dark:text-gray-300">
                        {{ $bestelling->id }} -
                        {{ $bestelling->omschrijving }} x {{ $bestelling->aantal }}
                        (€{{ number_format($bestelling->prijs, 2, ',', '.') }})
                        @if ($bestelling->transactie)
                            ({{ \Carbon\Carbon::parse($bestelling->transactie->datum)->format('d-m-Y') }})
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Blok 4: Overzicht Statistieken --}}
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow">
            <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Verkoop per Artikelgroep (per maand)</h2>
            <ul class="space-y-2">
                @foreach($statistieken as $statistiek)
                    <li class="text-sm text-gray-700 dark:text-gray-300">
                        {{ $statistiek->jaar }}-{{ str_pad($statistiek->maand, 2, '0', STR_PAD_LEFT) }} -
                        {{ $statistiek->artikelgroep }} -
                        {{ $statistiek->totaal_aantal }} verkocht
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
@endsection
