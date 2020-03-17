<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('member_no')->unique();
            $table->integer('member_type')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('residence')->nullable();
            $table->string('address')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('town')->nullable();
            $table->string('member_status')->default('INACTIVE');
            $table->date('subscription_date')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
