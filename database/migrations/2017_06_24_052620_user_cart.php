<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_carts', function (Blueprint $table) {
            //$table->increments('id');
            
            
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('products');
            $table->string('product_details');
            $table->string('product_name');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->double('amount');
            $table->integer('quantity');
            $table->double('amount_per_day');
            $table->timestamp('by_when');
            $table->double('amount_saved');
            $table->integer('days_remaining');
            $table->double('remaining_amount');
            $table->integer('no_of_days');
            $table->string('product_image');
            $table->bigInteger('epoch_start');
            $table->bigInteger('epoch_end');
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
        Schema::dropIfExists('USER_CART');
    }
}
