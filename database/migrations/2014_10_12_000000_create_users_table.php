<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tel',10);
            $table->date('birthdate');
            $table->string('address');
            $table->bigInteger('point');
            $table->string('type');
            $table->rememberToken();
            $table->timestamps();
        });
=======
      Schema::create('users', function (Blueprint $table) {
        $table->charset = 'utf8';
        $table->collation = 'utf8_general_ci';
        $table->increments('id');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('tel');
        $table->date('birthdate');
        $table->string('address');
        $table->Integer('point');
        $table->string('type');
        $table->rememberToken();
        $table->timestamps();
    });
>>>>>>> origin/editUserTable
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
