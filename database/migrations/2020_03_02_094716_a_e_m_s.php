<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AEMS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('catgeory');
            $table->timestamps();
        });


      Schema::create('enquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('country');
            $table->string('course');
            $table->string('intake');
            $table->string('advert');
            $table->string('comment');
            $table->string('enquiry_date');
            $table->string('admin_comment');
            $table->string('status');
         
            $table->timestamps();
        });

            Schema::create('Program_enquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('country');
            $table->string('course');
            $table->string('catgeory');
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
    }
}
