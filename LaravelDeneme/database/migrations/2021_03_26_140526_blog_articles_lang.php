<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogArticlesLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_articles_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_article_name',255);
            $table->integer('sub_service_id');//bu foreign olacak
            $table->integer('blog_category_id'); //bu foreign olacak
            $table->integer('default_blog_article_id')->unsigned();
            $table->foreign('default_blog_article_id')->references('id')->on('blog_articles');
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
        Schema::dropIfExists('blog_articles_lang');
    }
}
