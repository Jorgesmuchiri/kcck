<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MemberSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_subscriptions', function (Blueprint $table) {
            $table->increments('id', 200);
            $table->string('member_no')->nullable();
            $table->string('plan')->nullable();
            $table->string('trial_ends_at')->nullable();
            $table->string('starts_on')->nullable();
            $table->string('ends_at')->nullable();
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
        Schema::dropIfExists('member_subscriptions');
    }
}


