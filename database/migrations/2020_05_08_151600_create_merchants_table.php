<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('merchant_id');
            $table->string('merchant_title');
            $table->string('owner_firstname');
            $table->string('owner_secondname');
            $table->string('merchant_email')->unique();
            $table->timestamps(0);
            $table->longText('merchant_description');
            $table->string('merchant_image');
            $table->char('merchant_phone',15);
            $table->string('location');
            $table->string('category');
            $table->string('sub_category');
            $table->string('tags');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
}
