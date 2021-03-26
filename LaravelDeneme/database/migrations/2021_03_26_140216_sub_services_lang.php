<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubServicesLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_services_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_service_name',255);
            $table->smallInteger('default_sub_service_id')->unsigned();
            $table->foreign('default_sub_service_id')->references('id')->on('sub_services');
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
        Schema::dropIfExists('sub_services_lang');
    }
}