<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table("authors", function (Blueprint $table) {
            $table->unique("Slug");
        });
        Schema::table("categories", function (Blueprint $table) {
            $table->unique("Slug");
        });
        Schema::table("publishers", function (Blueprint $table) {
            $table->unique("Slug");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table("publishers", function (Blueprint $table) {
            $table->dropindex("publishers_slug_unique");
        });
        Schema::table("categories", function (Blueprint $table) {
            $table->dropindex("categories_slug_unique");
        });
        Schema::table("authors", function (Blueprint $table) {
            $table->dropindex("authors_slug_unique");
        });
    }
};
