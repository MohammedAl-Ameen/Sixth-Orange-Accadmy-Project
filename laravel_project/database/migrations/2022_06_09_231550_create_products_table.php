<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('item_category_id');
            $table->unsignedInteger('donater_id');
            $table->string('item_name');
            $table->string('item_description');
            $table->string('item_image');
            $table->string("state");
            $table->timestamps();
            $table->foreign('item_category_id')->on('categories')->references('id')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreign('donater_id')->on('users')->references('id')
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
        Schema::dropIfExists('products');
    }
}
