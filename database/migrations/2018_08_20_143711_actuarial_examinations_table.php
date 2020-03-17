<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActuarialExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuarial_examinations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('examining_body')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('stages_passed')->nullable();
            $table->string('member_no')->nullable();
            $table->date('date_passed')->nullable();
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
        Schema::dropIfExists('actuarial_examinations');
    }
}
