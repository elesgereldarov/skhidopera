<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddItemToActorsAndActorTranslationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->boolean('is_main')->nullable();
        });

        Schema::table('actor_translations', function (Blueprint $table) {
            $table->string('position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actors', function (Blueprint $table) {
            $table->dropColumn('is_main');
        });
        Schema::table('actor_translations', function (Blueprint $table) {
            $table->dropColumn('position');
        });
    }
}
