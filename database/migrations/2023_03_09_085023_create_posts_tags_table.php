<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');


            $table->index('post_id','post_tag_post_idx');
            $table->foreign('post_id','post_tag_post_fk')->references('id')->on('posts');


            $table->foreign('tag_id','post_tag_tag_fk')->references('id')->on('tags');
            $table->index('tag_id','post_tag_tag_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_tags');
    }
};
