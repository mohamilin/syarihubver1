<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRideCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ride_customer', function (Blueprint $table) {
            $table->integer('id_customer')->unsigned();
            $table->integer('id_ride')->unsigned();
            $table->timestamps();

            $table->primary('id_customer','id_ride');
            $table->foreign('id_customer')->on('id')->references('customers')->onDelete('CASCADE');
            $table->foreign('id_ride')->on('id')->references('rides')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ride_customer');
    }
}
