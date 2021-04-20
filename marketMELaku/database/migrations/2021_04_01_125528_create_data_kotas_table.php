<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kotas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('provinsi_id')->unsigned()->index();
            $table->string('kabupaten_kota', 150);
            $table->string('ibukota', 150);
            $table->string('k_bsni', 150);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_kotas');
    }
}
