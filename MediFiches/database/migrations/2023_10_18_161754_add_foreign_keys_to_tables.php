<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTables extends Migration
{
    public function up()
    {
        // Foreign Key: parents.person -> persons.national_number
        Schema::table('parents', function (Blueprint $table) {
            $table->foreign('person')->references('national_number')->on('persons');
        });

        // Foreign Key: parents.parental_link -> parental_links.parental_link
        Schema::table('parents', function (Blueprint $table) {
            $table->foreign('parental_link')->references('parental_link')->on('parental_links');
        });

        // Foreign Key: persons.role -> roles.role
        Schema::table('persons', function (Blueprint $table) {
            $table->foreign('role')->references('role')->on('roles');
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

        // Foreign Key: children.person -> persons.national_number
        Schema::table('children', function (Blueprint $table) {
            $table->foreign('person')->references('national_number')->on('persons');
        });

        // Foreign Key: children.parent_1 -> parents.person
        Schema::table('children', function (Blueprint $table) {
            $table->foreign('parent_1')->references('person')->on('parents');
        });

        // Foreign Key: children.parent_2 -> parents.person
        Schema::table('children', function (Blueprint $table) {
            $table->foreign('parent_2')->references('person')->on('parents');
        });

        // Foreign Key: children.group -> groups.name
        Schema::table('children', function (Blueprint $table) {
            $table->foreign('group')->references('name')->on('groups');
        });

        // Foreign Key: animators.animation_group -> groups.name
        Schema::table('animators', function (Blueprint $table) {
            $table->foreign('animation_group')->references('name')->on('groups');
        });

        // Foreign Key: animators.person -> persons.national_number
        Schema::table('animators', function (Blueprint $table) {
            $table->foreign('person')->references('national_number')->on('persons');
        });
    }

    public function down()
{
    // Supprimez les contraintes de clé étrangère dans l'ordre inverse de la création (dans la méthode down()).

    // Foreign Key: animators.person -> persons.national_number
    Schema::table('animators', function (Blueprint $table) {
        $table->dropForeign(['person']);
    });

    // Foreign Key: animators.animation_group -> groups.name
    Schema::table('animators', function (Blueprint $table) {
        $table->dropForeign(['animation_group']);
    });

    // Foreign Key: children.group -> groups.name
    Schema::table('children', function (Blueprint $table) {
        $table->dropForeign(['group']);
    });

    // Foreign Key: children.parent_2 -> parents.person
    Schema::table('children', function (Blueprint $table) {
        $table->dropForeign(['parent_2']);
    });

    // Foreign Key: children.parent_1 -> parents.person
    Schema::table('children', function (Blueprint $table) {
        $table->dropForeign(['parent_1']);
    });

    // Foreign Key: children.person -> persons.national_number
    Schema::table('children', function (Blueprint $table) {
        $table->dropForeign(['person']);
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

    // Foreign Key: persons.role -> roles.role
    Schema::table('persons', function (Blueprint $table) {
        $table->dropForeign(['role']);
    });

    // Foreign Key: parents.parental_link -> parental_links.parental_link
    Schema::table('parents', function (Blueprint $table) {
        $table->dropForeign(['parental_link']);
    });

    // Foreign Key: parents.person -> persons.national_number
    Schema::table('parents', function (Blueprint $table) {
        $table->dropForeign(['person']);
    });
}

}
