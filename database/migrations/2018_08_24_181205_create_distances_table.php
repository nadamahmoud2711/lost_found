<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distances', function (Blueprint $table) {
            $table->increments('id');

            $table->float('distance');

            $table->unsignedInteger('photo1_id');
            $table->unsignedInteger('photo2_id');

            $table->foreign('photo1_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('photo2_id')->references('id')->on('photos')->onDelete('cascade');

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
        Schema::dropIfExists('distances');
    }
}
