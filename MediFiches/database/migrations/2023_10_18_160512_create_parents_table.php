<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->integer('person')->primary();
            $table->string('parental_link', 255);
            $table->string('phone_number', 255);
            // Ajoutez d'autres colonnes si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('parents');
    }
}