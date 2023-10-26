<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->string('role', 255)->primary();

            // Vous pouvez également ajouter d'autres contraintes si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
