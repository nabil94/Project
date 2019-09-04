<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOwnerToCheckoutHistory extends Migration
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
            $table->string('owner_id');
            $table->string('owner_name');
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
            Schema::dropIfExists('owner_id');
            Schema::dropIfExists('owner_name');
        });
    }
}
