<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->integer('id', 200);
            $table->integer('event_id')->nullable();
            $table->integer('booking_code')->nullable();
            $table->string('company')->nullable();
            $table->integer('office_line')->nullable();
            $table->string('postal_address')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('identification_number')->nullable();
            $table->boolean('booking_status')->nullable();
            $table->date('booking_date')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('bookings');


    }
}
