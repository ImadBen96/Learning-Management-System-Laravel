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
        Schema::create('concours', function (Blueprint $table) {
            $table->increments("id");
            $table->string('title_fr');
            $table->string('title_ar');
            $table->text('short_description_fr')->nullable();
            $table->text('short_description_ar')->nullable();
            $table->text('contenu_fr')->nullable();
            $table->text('contenu_ar')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->string('tele')->nullable();
            $table->string('attachement')->nullable();
            $table->string('lieu_fr')->nullable();
            $table->string('lieu_ar')->nullable();

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
        Schema::dropIfExists('Concours');
    }
};
