<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::defaultStringLength(191);
        Schema::create('user_amt_datas', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->string('email')->unique();
            $table->string('item');
            $table->double('amount');
            $table->double('amount_per_day');
            $table->timestamp('by_when');
            $table->double('amount_saved');
            $table->integer('days_remaining');
            $table->double('remaining_amount');
            $table->integer('no_of_days');
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
        Schema::dropIfExists('user_amt_data');
    }
}
