<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('comment');
            $table->text('name'); 
            $table->unsignedBigInteger('blog_id');
            $table->foreign('blog_id')
                ->references('id')->on('blogs')
                ->onDelete('cascade');
            $table->text('email');
            $table->text('website');
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
        Schema::dropIfExists('comments');
    }
}
