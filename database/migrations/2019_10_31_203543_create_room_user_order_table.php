<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomUserOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_user_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('room_user_id');
            $table->bigInteger('product_id');
            $table->timestamps();

            $table->foreign('room_user_id')->references('id')->on('rooms_users') ->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_user_order');
    }
}
