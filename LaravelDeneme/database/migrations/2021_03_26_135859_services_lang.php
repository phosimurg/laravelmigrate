<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServicesLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name',255);
            $table->smallInteger('default_service_id')->unsigned();
            $table->foreign('default_service_id')->references('id')->on('services');
            $table->string('lang',255);
            $table->string('slug',255);
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
        Schema::dropIfExists('services_lang');
    }
}