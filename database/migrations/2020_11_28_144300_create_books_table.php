<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('is_feautured');
            $table->integer('sum');
            $table->text('cover');
            $table->text('desc');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('ISBN');
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->string('genre');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
