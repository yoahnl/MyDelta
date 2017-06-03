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
            $table->string('logo');
            $table->string('bg-image');
            $table->string('cell_1_image');
            $table->string('cell_2_image');
            $table->string('cell_3_image');
            $table->string('carrousel_1_image');
            $table->string('carrousel_2_image');
            $table->string('carrousel_3_image');
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
