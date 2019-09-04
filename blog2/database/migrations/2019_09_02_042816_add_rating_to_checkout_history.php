<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRatingToCheckoutHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkout_history', function (Blueprint $table) {
            //
            $table->string('user_rating');
            $table->string('user_review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkout_history', function (Blueprint $table) {
            //
            Schema::dropIfExists('user_rating');
            Schema::dropIfExists('user_review');
        });
    }
}
