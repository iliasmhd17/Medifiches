<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalCardsTable extends Migration
{
    public function up()
    {
        Schema::create('medical_cards', function (Blueprint $table) {
            $table->string('national_number',11)->primary()->default(123456789);
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('email',100);
            $table->boolean('can_participate')->default(0);
            $table->string('medical_record', 255)->nullable();
            $table->boolean('tetanos_protected')->default(0);
            $table->string('allergies', 255)->nullable();
            $table->string('allergies_consequences', 255)->nullable();
            $table->string('medecins', 255)->nullable();
            $table->string('quantity_medecine', 255)->nullable();
            $table->time('time_medecine')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('additional_infos', 255)->nullable();
            $table->string('street', 255)->nullable();
            $table->string('no')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('city', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->timestamps();
            // Vous pouvez également ajouter d'autres contraintes si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('medical_cards');
    }
}