<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('transactie', function (Blueprint $table) {
            $table->foreignId('medewerker_id')->after('id')->constrained('medewerker')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('transactie', function (Blueprint $table) {
            $table->dropForeign(['medewerker_id']);
            $table->dropColumn('medewerker_id');
        });
    }

};
