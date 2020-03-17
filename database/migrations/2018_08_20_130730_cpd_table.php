<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CpdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cpd', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_no')->nullable();
            $table->string('event_id')->nullable();
            $table->string('title')->nullable();
            $table->string('organizer')->nullable();
            $table->string('venue')->nullable();
            $table->date('begin_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('cpd_type')->nullable();
            $table->double('cpd_hours')->nullable()->default(0);
            $table->integer('action_id')->nullable()->default(3);
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('cpd');
    }
}
