<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoomNameToProductReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_reviews', function (Blueprint $table) {
            //
            $table->string('Given_by');
            $table->string('owner_rating');
            $table->string('owner_review');
            $table->string('room_rating');
            $table->string('room_review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_reviews', function (Blueprint $table) {
            //
            Schema::dropIfExists('Given_by');
            Schema::dropIfExists('owner_rating');
            Schema::dropIfExists('owner_review');
            Schema::dropIfExists('room_rating');
            Schema::dropIfExists('room_review');
        });
    }
}
