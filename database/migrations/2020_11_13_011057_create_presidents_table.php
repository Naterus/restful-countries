<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presidents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("country_id")->unsigned()->index();
            $table->string("name");
            $table->string("gender");
            $table->date("appointment_start_date");
            $table->date("appointment_end_date");
            $table->string("picture")->nullable();
            $table->string("created_by")->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
        Schema::dropIfExists('presidents');
    }
}
