<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('address');
            $table->integer('rent');
            $table->integer('security');
            $table->string('Type');
            $table->string('category');
            $table->longText('Description');
            $table->string('pics_dir');
            $table->string('food_services');
            $table->longText('rules');
            $table->longText('amenities');
            $table->string('email_owner');
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
        Schema::drop('house_details');
    }
}
