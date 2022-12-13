<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->unsigned()->references('id')->on('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('store_box');
            $table->string('purchase_price');
            $table->string('sell_price');
            $table->string('qty');
            $table->string('generic_name');
            $table->string('company');
            $table->string('effects');
            $table->string('expiry_date');
            $table->timestamps();
            // $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
