<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('category_id');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('title');
            $table->longText('content');
            $table->string('author')->nullable();
            $table->string('featured');
            $table->timestamps();

            // $table->foreing('category_id')->references('id')->categories();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
