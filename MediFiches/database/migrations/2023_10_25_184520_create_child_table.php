<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('children', function (Blueprint $table) {
            $table->integer('national_number')->primary();
            $table->integer('parent_1')->nullable();
            $table->integer('parent_2')->nullable();
            $table->string('group')->nullable();
            $table->foreign('parent_1')->references('national_number')->on('users')->cascadeOnDelete();
            $table->foreign('parent_2')->references('national_number')->on('users')->cascadeOnDelete();
            $table->foreign('group')->references('name')->on('groups')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};
