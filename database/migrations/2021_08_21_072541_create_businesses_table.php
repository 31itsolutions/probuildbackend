<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('business_title');
            $table->unsignedBigInteger('vendor_id')->unsigned();
            $table->string('business_category');
            $table->string('business_description');
            $table->string('status');

            $table->string('monday_from')->nullable();
            $table->string('monday_to')->nullable();
            $table->string('tuesday_from')->nullable();
            $table->string('tuesday_to')->nullable();
            $table->string('wednesday_from')->nullable();
            $table->string('wednesday_to')->nullable();
            $table->string('thursday_from')->nullable();
            $table->string('thursday_to')->nullable();
            $table->string('friday_from')->nullable();
            $table->string('friday_to')->nullable();
            $table->string('saturday_from')->nullable();
            $table->string('saturday_to')->nullable();
            $table->string('sunday_from')->nullable();
            $table->string('sunday_to')->nullable();
    
    
    
                //Location
                $table->string('country')->nullable();
                $table->string('city')->nullable();
                $table->string('location')->nullable();
                $table->string('lat')->nullable();
                $table->string('lang')->nullable();
    
                //Contact
                $table->string('email')->nullable();
                $table->string('mobile_no')->nullable();
                $table->string('website')->nullable();
                $table->string('fax_no')->nullable();
    
                $table->string('facebook')->nullable();
                $table->string('linkedin')->nullable();
                $table->string('twitter')->nullable();
                $table->string('instagram')->nullable();
             
    

            $table->timestamps();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
