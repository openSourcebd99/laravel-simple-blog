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
        // change the type of the active column from string to boolean
        Schema::table('posts', function (Blueprint $table) {
            $table->boolean('active')->default(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // change the type of the active column from boolean to string
        Schema::table('posts', function (Blueprint $table) {
            $table->string('active')->default('draft')->change();
        });
    }
};
