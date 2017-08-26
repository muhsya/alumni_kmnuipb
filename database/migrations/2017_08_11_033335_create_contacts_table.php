<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumni_id')->unsigned();
            $table->integer('contact_type')->unsigned();
            $table->string('value');
            $table->timestamps();

            $table->foreign('alumni_id')
                ->references('id')
                ->on('alumnis')
                ->onDelete('cascade');
            $table->foreign('contact_type')
                ->references('id')
                ->on('contact_types')
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
        Schema::dropIfExists('contacts');
    }
}
