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
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('coures', function (Blueprint $table) {
            $table->text('animateur')->nullable(true);
            $table->text('animateur_descriptor')->nullable(true);
            $table->text('animateur_pic')->nullable(true);
        });
    }
};
