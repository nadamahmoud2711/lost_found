<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidnappersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kidnappers', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('location_description')->nullable();
            $table->longText('description');
            $table->float('latitude', 10, 6)->nullable();
            $table->float('longitude', 10, 6)->nullable();
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
        Schema::dropIfExists('kidnappers');
    }
}
