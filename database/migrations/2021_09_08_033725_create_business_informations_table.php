<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_informations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_id')->unsigned();
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
        Schema::dropIfExists('business_informations');
    }
}
