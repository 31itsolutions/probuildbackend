<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_calls', function (Blueprint $table) {
            $table->id();
            $table->string('business_call_id');
            $table->string('vendor_call_id');
            $table->string('customer_call_id');

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
        Schema::dropIfExists('request_calls');
    }
}
