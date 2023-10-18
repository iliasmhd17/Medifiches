<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDataIntoParentalLinksTable extends Migration
{
    public function up()
    {
        DB::table('Parental_links')->insert([
            ['parental_link' => 'Père'],
            ['parental_link' => 'Mère'],
            ['parental_link' => 'Tuteur légal'],
        ]);
    }

    public function down()
    {
        DB::table('Parental_links')->whereIn('parental_link', ['Père', 'Mère', 'Tuteur légal'])->delete();
    }
}
