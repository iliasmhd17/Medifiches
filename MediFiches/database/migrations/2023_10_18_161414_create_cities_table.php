<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->string('name', 255)->primary();

            // Vous pouvez également ajouter d'autres contraintes si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('cities');
    }
}