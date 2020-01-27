<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('res_id');
            $table->bigInteger('res_ip_id');
            $table->bigInteger('res_us_id');
            $table->bigInteger('res_ik_id');
            $table->date('res_checkin');
            $table->date('res_checkout');
            $table->enum('res_status',['Booking','Dipakai','Selesai']);
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
        Schema::dropIfExists('reservations');
    }
}
