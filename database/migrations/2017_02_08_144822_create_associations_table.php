<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('url_facebook');
            $table->string('small_description');
            $table->text('description');
            $table->string('location');
            $table->string('title1')->nullable();
            $table->string('title2');
            $table->text('left_title1');
            $table->text('left_title2');
            $table->string('left_title3');
            $table->text('left_content1');
            $table->text('left_content2');
            $table->text('left_content3');
            $table->string('right_title1');
            $table->string('right_title2');
            $table->text('right_content1');
            $table->text('right_content2');
            $table->string('image');
            $table->string('type');
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
        Schema::dropIfExists('associations');
    }
}
