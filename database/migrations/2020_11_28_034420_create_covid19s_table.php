<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid19s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("country_id")->index()->unsigned();
            $table->bigInteger("total_case")->default(0);
            $table->bigInteger("total_deaths")->default(0);
            $table->bigInteger("updated_by");
            $table->foreign("country_id")->references("id")->on("countries")->onDelete("cascade");
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
        Schema::dropIfExists('covid19s');
    }
}
