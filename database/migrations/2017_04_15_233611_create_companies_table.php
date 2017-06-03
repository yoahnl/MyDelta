<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->string('bg-image');
            $table->string('cell_1_image');
            $table->string('cell_2_image');
            $table->string('cell_3_image');
            $table->string('carrousel_1_image');
            $table->string('carrousel_2_image');
            $table->string('carrousel_3_image');
            $table->text('description');
            $table->text('association')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
