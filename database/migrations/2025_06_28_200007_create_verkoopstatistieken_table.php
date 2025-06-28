<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verkoopstatistieken', function (Blueprint $table) {
            $table->id();
            $table->string('artikelgroep'); // bijv. 'Aardappels, groente en fruit'
            $table->integer('jaar');        // bijv. 2025
            $table->integer('maand');       // bijv. 6 (juni)
            $table->integer('totaal_aantal'); // bijv. 120 verkocht
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verkoopstatistieken');
    }
};
