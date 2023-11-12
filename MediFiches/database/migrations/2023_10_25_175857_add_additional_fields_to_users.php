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
        Schema::table('users', function (Blueprint $table) {
            $table->string('national_number',11)->unique()->after('id');
            $table->enum('role', ['organisation', 'parent'])->default('parent');
            $table->string('last_name')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('national_number');
            $table->dropColumn('role');
            $table->dropColumn('last_name');
        });
    }
};
