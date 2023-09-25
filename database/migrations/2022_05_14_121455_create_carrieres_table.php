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
        Schema::create('carrieres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post')->nullable();
            $table->string('photo')->nullable();
            $table->string('societe')->nullable();
            $table->string('date_de_debut')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('type_de_contrat')->nullable();
            $table->string('lieu_de_travail')->nullable();
            $table->text('caractéristiques_du_poste')->nullable();
            $table->text('Formation')->nullable();
            $table->string('Expérience_professionnelle')->nullable();
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
        Schema::dropIfExists('carrieres');
    }
};
