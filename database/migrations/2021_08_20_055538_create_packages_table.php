<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('bussiness_listing');
            $table->string('product_listing');
            $table->string('gallery_image');
            $table->string('company_profile');
            $table->string('contact');
            $table->string('location');
            $table->string('social_media');
            $table->string('priority_listing');
            $table->string('probuild_verify');
            $table->string('tendor_board');
            $table->string('validity');
            $table->string('price');
        
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
        Schema::dropIfExists('packages');
    }
}
