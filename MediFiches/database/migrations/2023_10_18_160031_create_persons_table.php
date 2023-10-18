<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->integer('national_number')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('role');
            $table->timestamps(); // Colonne de date de création et de mise à jour
        });
    }

    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
