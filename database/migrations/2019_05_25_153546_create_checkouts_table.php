<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_order');
            $table->string('card_number');
            $table->string('card_holder');
            $table->integer('expiry_month');
            $table->integer('expiry_year');
            $table->string('cvc');
            $table->string('direction');
            $table->string('country');
            $table->string('zip');
            $table->tinyInteger('status')->default(0);//0:unshipped, 1:shipped, 2:delivered
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
        Schema::dropIfExists('checkouts');
    }
}
