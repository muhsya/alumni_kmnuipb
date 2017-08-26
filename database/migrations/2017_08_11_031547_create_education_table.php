<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id')->unsigned();
            $table->integer('education_type')->unsigned();
            $table->integer('graduate');
            $table->timestamps();

            $table->foreign('alumni_id')
                ->references('id')
                ->on('alumnis')
                ->onDelete('cascade');
            $table->foreign('education_type')
                ->references('id')
                ->on('education_types')
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
        Schema::dropIfExists('education');
    }
}
