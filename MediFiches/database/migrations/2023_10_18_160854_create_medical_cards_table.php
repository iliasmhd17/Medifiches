<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalCardsTable extends Migration
{
    public function up()
    {
        Schema::create('medical_cards', function (Blueprint $table) {
            $table->integer('national_number')->primary();
            $table->boolean('can_participate');
            $table->string('medical_record', 255)->nullable();
            $table->boolean('tetanos_protected');
            $table->string('allergies', 255)->nullable();
            $table->string('allergies_consequences', 255)->nullable();
            $table->string('medecins', 255)->nullable();
            $table->string('quantity_medecine', 255)->nullable();
            $table->time('time_medecine')->nullable();
            $table->date('birth_date');
            $table->string('additional_infos', 255)->nullable();
            $table->string('street', 255);
            $table->integer('no');
            $table->integer('mailbox')->nullable();
            $table->string('city', 255);
            $table->string('country', 255);

            // Vous pouvez également ajouter d'autres contraintes si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('medical_cards');
    }
}