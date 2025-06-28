<?php

namespace App\Http\Controllers;

use App\Models\VerkoopStatistieken;
use Illuminate\Http\Request;
use App\Models\Logs;
use App\Models\Bestelling;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class InzichtenController extends Controller
{
    public function index()
    {
        // Laatste 10 voorraadwijzigingen
        $logs = Logs::with('product', 'user')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        // Laatste 10 bestellingen
        $bestellingen = Bestelling::with('product', 'transactie')
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();

        $statistieken = Verkoopstatistieken::orderBy('jaar')
            ->orderBy('maand')
            ->get();

        return view('inzichten.index', compact('logs', 'bestellingen', 'statistieken'));
    }

    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');
        $csv = fopen($file->getRealPath(), 'r');

        $headers = fgetcsv($csv); // kopregel
        $headerMap = array_flip($headers);

        $updated = 0;
        $inserted = 0;
        $errors = [];

        DB::beginTransaction();

        try {
            while (($row = fgetcsv($csv, 1000, ',')) !== false) {
                $barcode = trim($row[$headerMap['barcode']] ?? '');
                $omschrijving = trim($row[$headerMap['name']] ?? '');
                $prijs = floatval($row[$headerMap['price']] ?? 0);
                $artikelgroep = trim($row[$headerMap['category_id']] ?? '');
                $leverancier = trim($row[$headerMap['leverancier']] ?? '');
                $aantal = intval($row[$headerMap['quantity']] ?? 0);
                $eenheid = trim($row[$headerMap['eenheid']] ?? '');
                $minvoorraad = intval($row[$headerMap['quantity']] ?? 0);

                if (empty($barcode)) continue;

                $product = Product::where('artikelnummer', $barcode)->first();

                if ($product) {
                    // Product bestaat → voorraad ophogen
                    $product->aantal += $aantal;
                    $product->save();
                    $updated++;
                } else {
                    if (!$omschrijving || !$prijs || !$artikelgroep) {
                        $errors[] = "Onvolledige gegevens voor nieuw product met barcode: $barcode";
                        continue;
                    }

                    Product::create([
                        'artikelnummer' => $barcode,
                        'omschrijving' => $omschrijving,
                        'prijs' => $prijs,
                        'artikelgroep' => $artikelgroep,
                        'leverancier' => $leverancier,
                        'aantal' => $aantal,
                        'eenheid' => $eenheid,
                        'minvoorraad' => $minvoorraad,
                    ]);
                    $inserted++;
                }
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['csv_file' => 'Fout bij importeren: ' . $e->getMessage()]);
        } finally {
            fclose($csv);
        }

        return redirect()->back()->with('success', "CSV import voltooid. $updated producten bijgewerkt, $inserted nieuw toegevoegd.")
            ->with('import_errors', $errors);
    }
}
