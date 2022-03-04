<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('tipo')->nullable();
            $table->string('sexo')->nullable();
            $table->string('foto')->nullable();
            $table->string('foto1')->nullable();
            $table->string('nombre')->nullable();
            $table->string('naming')->nullable();
            $table->string('distrito')->nullable();
            $table->string('cabecera')->nullable();
            $table->string('municipio')->nullable();
            $table->string('frase')->nullable();
            $table->string('foto2')->nullable();
            $table->text('semblanza')->nullable();
            $table->text('propuesta1')->nullable();
            $table->text('propuesta2')->nullable();
            $table->text('propuesta3')->nullable();
            $table->text('propuesta4')->nullable();
            $table->text('propuesta5')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();

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
        Schema::dropIfExists('candidates');
    }
}
