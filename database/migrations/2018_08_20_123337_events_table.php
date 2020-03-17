<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_type_id')->nullable();
            $table->string('event_name')->nullable();
            $table->string('description')->nullable();
            $table->dateTime('begin_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('venue')->nullable();
            $table->string('organizer')->nullable();
            $table->date('date')->nullable();
            $table->double('non_member_cost')->nullable();
            $table->double('university_member_cost')->nullable();
            $table->double('student_member_cost')->nullable();
            $table->double('associate_member_cost')->nullable();
            $table->double('fellow_member_cost')->nullable();
            $table->double('library_member_cost')->nullable();
            $table->double('honorary_member_cost')->nullable();
            $table->double('cpd_hours')->nullable();
            $table->dateTime('early_bird_duration')->nullable();
            $table->double('early_bird_discount')->nullable();
            $table->double('cancellation_penalty')->nullable();
            $table->double('spaces')->nullable();
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
        Schema::dropIfExists('events');


    }
}
