<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_promos', function (Blueprint $table) {
            $table->bigIncrements('ip_id');
            $table->string('ip_keterangan');
            $table->bigInteger('ip_kode');
            $table->string('ip_hargapromo');
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
        Schema::dropIfExists('info_promos');
    }
}
