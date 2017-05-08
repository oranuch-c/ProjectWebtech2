<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->string('status');
            $table->double('price', 7, 2);
            $table->string('author');
            $table->string('year');
            $table->string('pageSize');
            $table->string('publishComp');
            $table->string('img');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                  ->references('category_id')
                  ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('titles');
        Schema::enableForeignKeyConstraints();
    }
}
