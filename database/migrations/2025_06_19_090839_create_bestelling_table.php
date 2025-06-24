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
        // bestelling migration
        Schema::create('bestelling', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transactie_id')->constrained('transactie')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('product')->onDelete('restrict');
            $table->string('omschrijving', 60);
            $table->decimal('prijs', 5, 2);
            $table->integer('aantal');
            $table->timestamps(); // zorgt voor create_time en update_time
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestelling');
    }
};
