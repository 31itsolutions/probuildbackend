<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_analytics', function (Blueprint $table) {
            $table->id();
            $table->string('user_info')->nullable();
            $table->string('business_id')->nullable();
            $table->string('clicks')->nullable();
            $table->string('leads')->nullable();

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
        Schema::dropIfExists('business_analytics');
    }
}
