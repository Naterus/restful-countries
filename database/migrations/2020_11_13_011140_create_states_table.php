<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("country_id")->unsigned()->index();
            $table->string('name');
            $table->string('nick_name')->nullable();
            $table->string('slogan')->nullable();
            $table->string('iso2')->nullable();
            $table->string('fips_code')->nullable();
            $table->string('region')->nullable();
            $table->string('official_language')->nullable();
            $table->string('size')->nullable();
            $table->bigInteger('population')->nullable();
            $table->string("created_by")->nullable();
            $table->string("updated_by")->nullable();
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
        Schema::dropIfExists('states');
    }
}
