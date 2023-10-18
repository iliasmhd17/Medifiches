<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentalLinksTable extends Migration
{
    public function up()
    {
        Schema::create('parental_links', function (Blueprint $table) {
            $table->string('parental_link', 255)->primary();

            // Vous pouvez également ajouter d'autres contraintes si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('parental_links');
    }
}