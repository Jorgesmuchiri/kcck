<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpesaStkPushRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_stk_push_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('request_id');
            $table->string('checkout_request_id');
            $table->string('result_code');
            $table->string('result_desc');
            $table->string('account_ref');
            $table->string('request_by');
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
        Schema::dropIfExists('mpesa_stk_push_requests');
    }
}
