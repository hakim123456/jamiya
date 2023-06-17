<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_operation');
            $table->string('nom_prenom_adherent', 255);
            $table->date('date_releve_compteur');
            $table->bigInteger('nouveau_releve');
            $table->bigInteger('ancien_releve');
            $table->bigInteger('quantite_consommee');
            $table->integer('prix_metre');
            $table->bigInteger('frais_relative_consommation');
            $table->bigInteger('frais_fixe_consommation');
            $table->bigInteger('frais_total_consommation');
            $table->bigInteger('autres_frais');
            $table->bigInteger('montant_demande');
            $table->bigInteger('montant_paye');
            $table->bigInteger('reste_a_payer');
            $table->integer('num_facture');
            $table->integer('num_recu_paiement');
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
        Schema::dropIfExists('factures');
    }
}
