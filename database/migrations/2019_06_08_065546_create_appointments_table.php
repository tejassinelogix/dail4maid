<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('region');
            $table->string('address');
            $table->string('contact');
            $table->string('c_days');
            $table->string('c_stay_hours');
            $table->string('c_qty');
            $table->string('c_material');
            $table->string('c_date');
            $table->string('c_time_slot');
            $table->string('c_instruction');
            $table->string('pay_method');
            $table->integer('amount');
            $table->string('status');
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
        Schema::dropIfExists('appointments');
    }
}
