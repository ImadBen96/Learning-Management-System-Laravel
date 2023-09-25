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
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->increments("id");
            $table->string("title_fr");
            $table->string("title_ar");
            $table->string("niveau_scolaire_fr")->nullable();
            $table->string("niveau_scolaire_ar")->nullable();
            $table->string("formation_professionnelle_fr")->nullable();
            $table->string("formation_professionnelle_ar")->nullable();
            $table->string("age")->nullable();
            $table->string("project_name_fr")->nullable();
            $table->string("project_name_ar")->nullable();
            $table->string("logo")->nullable();
            $table->string("short_description_fr")->nullable();
            $table->string("short_description_ar")->nullable();
            $table->string("statut_juridique_fr")->nullable();
            $table->string("statut_juridique_ar")->nullable();
            $table->string("category_fr")->nullable();
            $table->string("category_ar")->nullable();
            $table->string('secteur_activite_fr')->nullable();
            $table->string('secteur_activite_ar')->nullable();
            $table->string("domiciliation_fr")->nullable();
            $table->string("domiciliation_ar")->nullable();
            $table->string("canaux_communication_fr")->nullable();
            $table->string("canaux_communication_ar")->nullable();
            $table->string("capitale_initiale")->nullable();
            $table->string("apport_INDH")->nullable();
            $table->string("apport_entrepreneur")->nullable();
            $table->string("opportunite_financement")->nullable();
            $table->string("contenu_fr")->nullable();
            $table->string("contenu_ar")->nullable();

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
        Schema::dropIfExists('Entrepreneurs');
    }
};
