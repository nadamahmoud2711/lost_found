<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('lost'); // lost = 1 or found = 0
            $table->boolean('gender')->nullable();
            $table->longText('description')->nullable();
            $table->longText('location_description')->nullable();
            $table->float('latitude', 10, 6)->nullable();
            $table->float('longitude', 10, 6)->nullable();
            $table->integer('age_from')->nullable();
            $table->integer('age_to')->nullable();
            $table->string('name')->nullable();
            $table->dateTime('lost_or_found')->nullable();
            $table->longText('embedding')->nullable(); // 128 vector, elements are separated by , or ;
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('posts');
    }
}
