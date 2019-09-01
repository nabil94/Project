<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_id');
            $table->string('room_name');
            $table->string('flat_id');
            $table->string('flat_name');
            $table->date('Entry_date');
             $table->date('checkout_date');
             $table->string('user_id');
             $table->string('user_name');

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
        Schema::dropIfExists('checkout_history');
    }
}
