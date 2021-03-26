<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogCategoriesLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_category_name',255);
            $table->smallInteger('default_blog_category_id')->unsigned();
            $table->foreign('default_blog_category_id')->references('id')->on('blog_categories');
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
        Schema::dropIfExists('blog_categories_lang');
    }
}
