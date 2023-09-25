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
        Schema::create('acceuils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_profile')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nationality')->nullable();
            $table->string('genre');
            $table->string('date_naissance');
            $table->string('lieu_naissance')->nullable();
            $table->string('territoire');
            $table->string('autre_province')->nullable();
            $table->text('address')->nullable();
            $table->string('cin')->nullable();
            $table->string('tel1')->nullable();
            $table->string('email1')->nullable()->unique();
            $table->string('tel2')->nullable();
            $table->string('connu_notre_service')->nullable();
            $table->string('connu_notre_service_autre')->nullable();
            $table->string('membres_de_famille')->nullable();
            $table->string('personnes_ayant_une_activite_salariale')->nullable();
            $table->string('ressources')->nullable();
            $table->string('situation_familiale')->nullable();
            $table->string('logement')->nullable();
            $table->string('handicap_quelconque')->nullable();
            $table->string('type_de_handicap')->nullable();
            $table->string('cause_du_handicap')->nullable();
            $table->string('mobilite')->nullable();
            $table->string('maladie_chronique')->nullable();
            $table->string('maladie_chronique_oui')->nullable();
            $table->string('rendement_travail')->nullable();
            $table->string('rendement_travail_oui')->nullable();
            $table->string('niveau_scolaire')->nullable();
            $table->string('niveau_scolaire_avec_diplome')->nullable();
            $table->string('oriente_vers')->nullable();
            $table->string('oriente_vers_autre')->nullable();
            $table->string('objectif_professionnel')->nullable();
            $table->string('souhait_formation')->nullable();
            $table->string('souhait_formation_oui')->nullable();
            $table->string('disponible')->nullable();
            $table->string('status')->nullable();
            $table->string('status_chat')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('acceuil');
    }
};
