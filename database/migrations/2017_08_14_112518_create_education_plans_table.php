<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id')->unsigned();
            $table->tinyInteger('type')->default(0); //0 sedang, 1 akan
            $table->string('level');
            $table->tinyInteger('place')->default(0);
            $table->string('country');
            $table->string('university');
            $table->string('field');
            $table->timestamps();

            $table->foreign('alumni_id')
                ->references('id')
                ->on('alumnis')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education_plans');
    }
}
