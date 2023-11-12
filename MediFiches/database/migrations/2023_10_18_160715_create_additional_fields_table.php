<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalFieldsTable extends Migration
{
    public function up()
    {
        Schema::create('additional_fields', function (Blueprint $table) {
            $table->string('medical_card');
            $table->string('field_name', 255);
            $table->string('field_value', 255);
            
            // Clé primaire composée
            $table->primary(['medical_card', 'field_name']);
            
            // Vous pouvez également ajouter d'autres contraintes si nécessaire
        });
    }

    public function down()
    {
        Schema::dropIfExists('additional_fields');
    }
}