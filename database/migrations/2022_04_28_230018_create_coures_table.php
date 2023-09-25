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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name');
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->string('sous_category')->nullable();
            $table->timestamps();
        });
        Schema::create('coures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cours_name');
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->string('status')->nullable();
            $table->integer('category_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('coures');
        Schema::dropIfExists('categories');
    }
};
