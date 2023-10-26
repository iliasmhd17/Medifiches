<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTables extends Migration
{
    public function up()
    {
        // Foreign Key: parents.parental_link -> parental_links.parental_link
        Schema::table('parents', function (Blueprint $table) {
            $table->foreign('parental_link')->references('parental_link')->on('parental_links');
        });

        // Foreign Key: additional_fields.medical_card -> medical_cards.national_number
        Schema::table('additional_fields', function (Blueprint $table) {
            $table->foreign('medical_card')->references('national_number')->on('medical_cards');
        });

        // Foreign Key: medical_cards.national_number -> persons.national_number
        Schema::table('medical_cards', function (Blueprint $table) {
            $table->foreign('national_number')->references('national_number')->on('persons');
        });

        // Foreign Key: medical_cards.city -> cities.name
        Schema::table('medical_cards', function (Blueprint $table) {
            $table->foreign('city')->references('name')->on('cities');
        });

        // Foreign Key: medical_cards.country -> countries.name
        Schema::table('medical_cards', function (Blueprint $table) {
            $table->foreign('country')->references('name')->on('countries');
        });

        // Foreign Key: animators.animation_group -> groups.name
        Schema::table('animators', function (Blueprint $table) {
            $table->foreign('animation_group')->references('name')->on('groups');
        });

    }

    public function down()
{
    // Supprimez les contraintes de clé étrangère dans l'ordre inverse de la création (dans la méthode down()).

    // Foreign Key: animators.animation_group -> groups.name
    Schema::table('animators', function (Blueprint $table) {
        $table->dropForeign(['animation_group']);
    });

    // Foreign Key: children.group -> groups.name
    Schema::table('children', function (Blueprint $table) {
        $table->dropForeign(['group']);
    });

    // Foreign Key: medical_cards.country -> countries.name
    Schema::table('medical_cards', function (Blueprint $table) {
        $table->dropForeign(['country']);
    });

    // Foreign Key: medical_cards.city -> cities.name
    Schema::table('medical_cards', function (Blueprint $table) {
        $table->dropForeign(['city']);
    });

    // Foreign Key: medical_cards.national_number -> persons.national_number
    Schema::table('medical_cards', function (Blueprint $table) {
        $table->dropForeign(['national_number']);
    });

    // Foreign Key: additional_fields.medical_card -> medical_cards.national_number
    Schema::table('additional_fields', function (Blueprint $table) {
        $table->dropForeign(['medical_card']);
    });

    // Foreign Key: parents.parental_link -> parental_links.parental_link
    Schema::table('parents', function (Blueprint $table) {
        $table->dropForeign(['parental_link']);
    });
}

}
