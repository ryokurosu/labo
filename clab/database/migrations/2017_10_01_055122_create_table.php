<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('movies', function(Blueprint $table) {
                  $table->increments('movie_id');
                  $table->string('title');
                  $table->string('elem')->unique();
                  $table->integer('view')->default(0);
                  $table->string('site');
                  $table->timestamps('created_at');
              });

          Schema::create('tags', function(Blueprint $table) {
                  $table->increments('tag_id');
                  $table->string('tag_name');
              });

           Schema::create('users', function(Blueprint $table) {
                  $table->increments('id');
                  $table->string('name');
                  $table->string('password');
                  $table->integer('auth')->default(1);
                  $table->string('fav_movie')->default('');
              });
           Schema::create('movie_tags', function(Blueprint $table) {
                  $table->integer('movie_id');
                  $table->integer('tag_id');
                  $table->timestamps('created_at');
              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('movies');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('users');
        Schema::dropIfExists('movie_tags');
    }
}
