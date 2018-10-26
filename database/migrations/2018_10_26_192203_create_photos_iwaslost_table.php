<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosIwaslostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_iwaslost', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->boolean('additional');
            $table->integer('iwaslost_id')->nullable()->unsigned();
            $table->foreign('iwaslost_id')->references('id')->on('iwaslost')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('photos_iwaslost');
    }
}
