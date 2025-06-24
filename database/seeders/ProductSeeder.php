<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Container\Attributes\Database;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            ['id' => 1, 'artikelnummer' => 123456, 'omschrijving' => 'Broccoli', 'leverancier' => 'Boer Harms', 'artikelgroep' => 'Aardappels, groente en fruit', 'eenheid' => 'stuk', 'prijs' => 1.99, 'aantal' => 15, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 2, 'artikelnummer' => 123457, 'omschrijving' => 'Bloemkool', 'leverancier' => 'Boer Harms', 'artikelgroep' => 'Aardappels, groente en fruit', 'eenheid' => 'stuk', 'prijs' => 2.99, 'aantal' => 50, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 3, 'artikelnummer' => 123458, 'omschrijving' => 'Aubergine', 'leverancier' => 'Boer Harms', 'artikelgroep' => 'Aardappels, groente en fruit', 'eenheid' => 'stuk', 'prijs' => 0.89, 'aantal' => 75, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 4, 'artikelnummer' => 123459, 'omschrijving' => 'Salade ui', 'leverancier' => 'Boer Harms', 'artikelgroep' => 'Aardappels, groente en fruit', 'eenheid' => 'bosje', 'prijs' => 0.59, 'aantal' => 50, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 5, 'artikelnummer' => 123460, 'omschrijving' => 'Snoepgroente tomaat', 'leverancier' => 'Boer Harms', 'artikelgroep' => 'Aardappels, groente en fruit', 'eenheid' => '500g', 'prijs' => 2.99, 'aantal' => 75, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 6, 'artikelnummer' => 123461, 'omschrijving' => 'Kruimige aardappel', 'leverancier' => 'Boer Harms', 'artikelgroep' => 'Aardappels, groente en fruit', 'eenheid' => '1kg', 'prijs' => 1.09, 'aantal' => 25, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 7, 'artikelnummer' => 123462, 'omschrijving' => 'Kruimige aardappel', 'leverancier' => 'Boer Harms', 'artikelgroep' => 'Aardappels, groente en fruit', 'eenheid' => '5kg', 'prijs' => 2.75, 'aantal' => 25, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 8, 'artikelnummer' => 123463, 'omschrijving' => 'Kaas geraspt mid 45+', 'leverancier' => 'De Zaanse Hoeve', 'artikelgroep' => 'Kaas,vleeswaren', 'eenheid' => '200g', 'prijs' => 1.79, 'aantal' => 45, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 9, 'artikelnummer' => 123464, 'omschrijving' => 'Kaas Pittig 45+ geraspt', 'leverancier' => 'De Zaanse Hoeve', 'artikelgroep' => 'Kaas,vleeswaren', 'eenheid' => '200g', 'prijs' => 1.89, 'aantal' => 45, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 10, 'artikelnummer' => 123465, 'omschrijving' => 'Kaas Jong 48+', 'leverancier' => 'De Zaanse Hoeve', 'artikelgroep' => 'Kaas,vleeswaren', 'eenheid' => '400g', 'prijs' => 2.89, 'aantal' => 45, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 11, 'artikelnummer' => 123466, 'omschrijving' => 'Kipfilet', 'leverancier' => 'Meester &amp; Zn.', 'artikelgroep' => 'Kaas,vleeswaren', 'eenheid' => '150g', 'prijs' => 1.69, 'aantal' => 40, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 12, 'artikelnummer' => 123467, 'omschrijving' => 'Gerookte spekreepjes', 'leverancier' => 'Meester &amp; Zn.', 'artikelgroep' => 'Kaas,vleeswaren', 'eenheid' => '300g', 'prijs' => 2.69, 'aantal' => 40, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 13, 'artikelnummer' => 123468, 'omschrijving' => 'Gerookte schouderham', 'leverancier' => 'Meester &amp; Zn.', 'artikelgroep' => 'Kaas,vleeswaren', 'eenheid' => '150g', 'prijs' => 1.09, 'aantal' => 40, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 14, 'artikelnummer' => 123469, 'omschrijving' => 'Boterhamworst', 'leverancier' => 'Meester &amp; Zn.', 'artikelgroep' => 'Kaas,vleeswaren', 'eenheid' => '150g', 'prijs' => 0.99, 'aantal' => 45, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 15, 'artikelnummer' => 123470, 'omschrijving' => 'Pindakaas', 'leverancier' => 'Calvé', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '350g', 'prijs' => 2.69, 'aantal' => 65, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 16, 'artikelnummer' => 123471, 'omschrijving' => 'Appelstroop', 'leverancier' => 'Rinse', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '450g', 'prijs' => 0.69, 'aantal' => 65, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 17, 'artikelnummer' => 123472, 'omschrijving' => 'Hazelnootpasta', 'leverancier' => 'Nutella', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '630g', 'prijs' => 4.99, 'aantal' => 65, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 18, 'artikelnummer' => 123473, 'omschrijving' => 'Vruchtenhagel', 'leverancier' => 'De Ruijter', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '400g', 'prijs' => 1.35, 'aantal' => 65, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 19, 'artikelnummer' => 123474, 'omschrijving' => 'Chocoladehagel puur', 'leverancier' => 'De Ruijter', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '390g', 'prijs' => 2.49, 'aantal' => 56, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 20, 'artikelnummer' => 123475, 'omschrijving' => 'Hagelslag melk', 'leverancier' => 'Venz', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '400g', 'prijs' => 1.69, 'aantal' => 57, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 21, 'artikelnummer' => 123476, 'omschrijving' => 'Rimboe kroko vlokken puur/vanille', 'leverancier' => 'Venz', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '200g', 'prijs' => 1.99, 'aantal' => 35, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 22, 'artikelnummer' => 123477, 'omschrijving' => 'Vlokken puur', 'leverancier' => 'De Ruijter', 'artikelgroep' => 'Broodbeleg', 'eenheid' => '300g', 'prijs' => 1.99, 'aantal' => 55, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 23, 'artikelnummer' => 123478, 'omschrijving' => 'Cola Zero sugar', 'leverancier' => 'Coca-Cola', 'artikelgroep' => 'Frisdrank', 'eenheid' => '1l', 'prijs' => 1.85, 'aantal' => 100, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 24, 'artikelnummer' => 123479, 'omschrijving' => 'Cola Regular', 'leverancier' => 'Coca-Cola', 'artikelgroep' => 'Frisdrank', 'eenheid' => '1l', 'prijs' => 1.85, 'aantal' => 150, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 25, 'artikelnummer' => 123480, 'omschrijving' => 'Fanta Orange', 'leverancier' => 'Fanta', 'artikelgroep' => 'Frisdrank', 'eenheid' => '1,5l', 'prijs' => 1.95, 'aantal' => 125, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 26, 'artikelnummer' => 123481, 'omschrijving' => 'Aroma rood filter koffie', 'leverancier' => 'Douwe Egberts', 'artikelgroep' => 'Koffie', 'eenheid' => '250g', 'prijs' => 3.29, 'aantal' => 250, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 27, 'artikelnummer' => 123482, 'omschrijving' => 'Aroma rood filter koffie', 'leverancier' => 'Douwe Egberts', 'artikelgroep' => 'Koffie', 'eenheid' => '500g', 'prijs' => 6.15, 'aantal' => 125, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 28, 'artikelnummer' => 123483, 'omschrijving' => 'Koffiemelk Halvamel', 'leverancier' => 'Friesche vlag', 'artikelgroep' => 'Koffie', 'eenheid' => '455ml', 'prijs' => 1.25, 'aantal' => 122, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 29, 'artikelnummer' => 123484, 'omschrijving' => 'Senseo Classic Koffiepads', 'leverancier' => 'Douwe Egberts', 'artikelgroep' => 'Koffie', 'eenheid' => '36st', 'prijs' => 3.69, 'aantal' => 100, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 30, 'artikelnummer' => 123485, 'omschrijving' => 'Opschuimmelk voor cappucino', 'leverancier' => 'Friesche vlag', 'artikelgroep' => 'Koffie', 'eenheid' => '1l', 'prijs' => 1.35, 'aantal' => 50, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
            ['id' => 31, 'artikelnummer' => 123486, 'omschrijving' => 'Huisblends Aroma snelfiltermaling', 'leverancier' => 'Perla', 'artikelgroep' => 'Koffie', 'eenheid' => '250g', 'prijs' => 2.89, 'aantal' => 75, 'created_at' => '2021-06-10 09:12:46', 'updated_at' => '2021-06-10 09:12:46'],
        ]);
    }
}
