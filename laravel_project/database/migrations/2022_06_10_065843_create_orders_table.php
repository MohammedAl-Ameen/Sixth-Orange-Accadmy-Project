<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_order_id');
            $table->unsignedInteger('user_order_id');
            $table->string("state")->nullable();
            $table->timestamps();
            $table->foreign('product_order_id')->on('products')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE')
            ;
            $table->foreign('user_order_id')->on('users')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->enum('status',['wait','done'])->default('wait');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
