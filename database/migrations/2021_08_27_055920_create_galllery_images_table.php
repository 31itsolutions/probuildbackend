<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallleryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galllery_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_id')->unsigned();
            $table->string('gallery_image');
            $table->timestamps();
            $table->foreign('business_id')->references('id')->on('businesses')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galllery_images');
    }
}
