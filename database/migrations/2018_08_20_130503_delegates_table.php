<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DelegatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('delegates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_id')->nullable();
            $table->integer('member_no')->nullable();
            $table->integer('ern_number')->nullable();
            $table->string('salutation')->nullable();
            $table->string('full_names')->nullable();
            $table->string('position')->nullable();
            $table->boolean('attendance_status')->nullable();
            $table->integer('accommodation_id')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        //
        Schema::dropIfExists('delegates');
    }
}
