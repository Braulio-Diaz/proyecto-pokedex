<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonG1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemong1', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('name', 50);
            $table->string('type1', 50);
            $table->string('type2', 50);
            $table->string('eggGroup1', 50);
            $table->string('eggGroup2', 50);
            $table->string('japanese', 50);
            $table->string('romanized', 50);
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemonG1');
    }
}
