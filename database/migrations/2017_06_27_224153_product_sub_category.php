<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductSubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sub_categories', function (Blueprint $table) {
            $table->increments('prod_subcat_id');
            $table->string('prod_sub_cat_name');
            $table->integer('prod_cat_id')->unsigned();
            $table->foreign('prod_cat_id')->references('prod_cat_id')->on('product_categories');
            $table->integer('level');
            $table->string('prod_sub_category_image_uri')->unique();
            $table->integer('is_active');
            $table->integer('created_prs_id');
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
        Schema::dropIfExists('product_sub_categories');
    }
}
