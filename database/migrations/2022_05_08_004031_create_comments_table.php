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
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actualite_id')->unsigned();;
            $table->string('name_fr');
            $table->string('name_ar');
            $table->string('subject_fr')->nullable();
            $table->string('subject_ar')->nullable();
            $table->text('comment_fr')->nullable();
            $table->text('comment_ar')->nullable();
            $table->string('type')->nullable();



            $table->foreign('actualite_id')->references('id')->on('actualites');

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
        Schema::dropIfExists('comments');
    }
};
