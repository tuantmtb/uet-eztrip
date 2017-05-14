<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->longText('description')->nullable();
            $table->text('place')->nullable();
            $table->text('city')->nullable();
            $table->float('price')->nullable();
            $table->dateTime('time_begin')->nullable();
            $table->dateTime('time_end')->nullable();
            $table->integer('time_duration')->nullable();
            $table->string('url_cover')->nullable();
            $table->string('url_gird')->nullable();

            $table->integer('tourguide_id')->unsigned()->index();
            $table->foreign('tourguide_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('tours');
    }
}
