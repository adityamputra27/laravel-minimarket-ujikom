<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembelians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pembelians_id')->unsigned()->index();
            $table->bigInteger('barangs_id')->unsigned()->index();
            $table->double('harga_beli', 100, 2);
            $table->integer('jumlah');
            $table->double('sub_total', 100, 2);
            $table->timestamps();

            $table->foreign('pembelians_id')->references('id')->on('pembelians')->onDelete('cascade');
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
        Schema::dropIfExists('detail_pembelians');
    }
}
