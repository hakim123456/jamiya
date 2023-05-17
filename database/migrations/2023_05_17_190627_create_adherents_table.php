<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdherentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherents', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_adherent');
            $table->string('cin_adherent');
            $table->string('prenom_adherent');
            $table->integer('numero_tel_adherent');
            $table->string('imada');
            $table->string('tajamou3');
            $table->boolean('inscription');
            $table->date('date_inscription');
            $table->integer('num_robenet');
            $table->string('ref_compteur');
            $table->bigInteger('allt');
            $table->bigInteger('long');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('adherents');
    }
}
