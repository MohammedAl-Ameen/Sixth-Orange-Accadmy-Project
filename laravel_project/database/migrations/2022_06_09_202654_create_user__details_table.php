<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_detail_id');   
            $table->string('user_image');
            $table->string('user_address');
            $table->integer('admin_flag');
            $table->timestamps();

            $table->foreign('user_detail_id')->on('users')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__details');
    }
}
