<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretaries', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();
            $table->string('cargo')->nullable();
            $table->string('grado')->nullable();
            $table->string('experiencia1')->nullable();
            $table->string('experiencia2')->nullable();
            $table->string('experiencia3')->nullable();
            $table->string('sexo')->nullable();
            $table->string('foto')->nullable();
            $table->string('foto1')->nullable();
            $table->string('nombre')->nullable();
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
        Schema::dropIfExists('secretaries');
    }
}
