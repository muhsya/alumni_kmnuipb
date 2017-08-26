<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned();
            $table->string('entrance')->nullable();
            $table->string('full_name');
            $table->string('nick_name');
            $table->string('photo')->nullable();
            $table->string('slug');
            $table->string('born_place');
            $table->dateTime('born_date');
            $table->boolean('sex')->default(0);
            $table->boolean('married_status')->default(0);
            $table->string('pesantren')->nullable();
            $table->string('from_place')->nullable();
            $table->string('now_place')->nullable();
            $table->string('skill')->nullable();
            $table->string('activity')->nullable();
            $table->timestamps();

            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}
