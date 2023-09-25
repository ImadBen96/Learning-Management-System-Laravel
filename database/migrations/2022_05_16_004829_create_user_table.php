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
       \App\Models\User::create([
           'full_name' => "admin",
           'role_name' => "ADMIN",
           'email' => "admin@pjn.com",
           'address' => "Address !!",
           'phone_number' => "060000000",
           'date_of_birth' => "1996-01-22",
           'password' => bcrypt("123456789")
       ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
