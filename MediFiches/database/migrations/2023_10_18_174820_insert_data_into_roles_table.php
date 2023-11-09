<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDataIntoRolesTable extends Migration
{
    public function up()
    {
        DB::table('Roles')->insert([
            ['role' => 'Animateur'],
            ['role' => 'Parent'],
            ['role' => 'Enfant'],
        ]);
    }

    public function down()
    {
        //DB::table('Roles')->whereIn('role', ['Animateur', 'Parent', 'Enfant'])->delete();
    }
}