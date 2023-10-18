<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDataIntoCountriesTable extends Migration
{
    public function up()
    {
        DB::table('countries')->insert([
            ['name' => 'Belgique'],
        ]);
    }

    public function down()
    {
        DB::table('countries')->where('name', 'Belgique')->delete();
    }
}