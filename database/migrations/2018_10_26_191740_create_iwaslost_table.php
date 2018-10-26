<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIwaslostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iwaslost', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('annonymous')->default(false);
            $table->longText('story');
            $table->longText('location');
            $table->date('approximate_date');
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
        Schema::dropIfExists('iwaslost');
    }
}
