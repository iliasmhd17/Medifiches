<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimatorsTable extends Migration
{
    public function up()
    {
        Schema::create('animators', function (Blueprint $table) {
            $table->string('user')->primary();
            $table->string('animation_group', 255)->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('animators');
    }
}