<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestCallActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_call_actions', function (Blueprint $table) {
            $table->id();
             $table->string('request_call_action');
            $table->string('request_call_tendor_id');
            $table->string('request_call_vendor_id');
            $table->string('request_call_removed');

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
        Schema::dropIfExists('request_call_actions');
    }
}
