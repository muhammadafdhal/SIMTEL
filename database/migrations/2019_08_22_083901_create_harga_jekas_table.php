<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHargaJekasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_jekas', function (Blueprint $table) {
            $table->bigIncrements('hj_id');
            $table->enum('hj_kategori',['Deluxe Double','Deluxe Single','Standart Budget']);
            $table->integer('hj_harga');
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
        Schema::dropIfExists('harga_jekas');
    }
}
