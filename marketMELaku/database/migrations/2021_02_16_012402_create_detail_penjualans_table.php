<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penjualans_id')->unsigned()->index();
            $table->bigInteger('barangs_id')->unsigned()->index();
            $table->double('harga_jual', 100, 0);
            $table->integer('jumlah');
            $table->double('sub_total', 100, 0);
            $table->timestamps();

            $table->foreign('penjualans_id')->references('id')->on('penjualans')->onDelete('cascade');
            $table->foreign('barangs_id')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_penjualans');
    }
}
