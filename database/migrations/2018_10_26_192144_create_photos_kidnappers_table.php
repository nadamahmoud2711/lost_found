<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosKidnappersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos_kidnappers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->boolean('additional');
            $table->integer('kidnapper_id')->nullable()->unsigned();
            $table->foreign('kidnapper_id')->references('id')->on('kidnappers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('photos_kidnappers');
    }
}
