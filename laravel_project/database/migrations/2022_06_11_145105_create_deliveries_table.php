<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_delivery_id');
            $table->string('delivery_name');
            $table->string('delivery_lname');
            $table->string('delivery_email');
            $table->string('delivery_password');
            $table->string('delivery_address');
            $table->string('delivery_mobile');
            $table->string('delivery_message');
            $table->integer('delivery_flag');   
            $table->timestamps();

            $table->foreign('user_delivery_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
