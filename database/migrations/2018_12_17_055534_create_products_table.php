<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('title');
            $table->string('subtitle');
            $table->string('slug');
            $table->integer('product_price');
            $table->integer('original_price');
            $table->integer('main_category');
            $table->integer('sub_category');
            $table->string('offer');
            $table->string('country');
            $table->string('section');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keyword');
            $table->string('product_ref_number');
            $table->string('discount');
            $table->string('return_policy');
            $table->text('body');
            $table->integer('status');
            $table->integer('postedby');
            $table->integer('like');
            $table->integer('dislike');
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
}
