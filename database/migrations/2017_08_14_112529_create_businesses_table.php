<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id')->unsigned();
            $table->string('sector');
            $table->string('position');
            $table->text('address');
            $table->integer('postal_code');
            $table->string('omzet')->default(0);
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
        Schema::dropIfExists('businesses');
    }
}
