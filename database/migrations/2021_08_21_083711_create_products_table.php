<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_id')->unsigned();
             $table->string('product_name')->nullable();
             $table->string('product_price_from')->nullable();
             $table->string('product_price_to')->nullable();
             $table->string('product_category')->nullable();
             $table->string('product_description')->nullable();

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
        Schema::dropIfExists('products');
    }
}
