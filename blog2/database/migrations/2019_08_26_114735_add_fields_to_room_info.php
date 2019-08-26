<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToRoomInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_info', function (Blueprint $table) {
            //`family`, `friends`, `pet_allow`, `student`, `job_seeker`, `late_night`, `hard_drinks`,
            $table->string('family');
            $table->string('friends');
            $table->string('pet_allow');
            $table->string('student');
            $table->string('job_seeker');
            $table->string('Late_night');
            $table->string('hard_drinks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_info', function (Blueprint $table) {
            //
            Schema::dropIfExists('family');
            Schema::dropIfExists('friends');
            Schema::dropIfExists('pet_allow');
            Schema::dropIfExists('student');
            Schema::dropIfExists('job_seeker');
            Schema::dropIfExists('Late_night');
            Schema::dropIfExists('hard_drinks');
        });
    }
}
