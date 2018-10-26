<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->boolean('additional');
            $table->integer('post_id')->nullable()->unsigned();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('photos_posts');
    }
}
