<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson', function (Blueprint $table) {
            $table->bigIncrements('id_lesson');
            $table->integer('nr_cwiczenia')->default('0');
            $table->integer('ocena1')->defaut('0');
            $table->integer('ocena2')->defaut('0');
            $table->integer('ocena3')->defaut('0');
            $table->UnsignedBigInteger('id_studenta');
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
        Schema::dropIfExists('lesson');
    }
}
