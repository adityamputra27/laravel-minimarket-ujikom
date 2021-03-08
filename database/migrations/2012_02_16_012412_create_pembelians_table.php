<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('kode_masuk', 50);
            $table->date('tanggal_masuk');
            $table->double('total', 100, 2);
            $table->bigInteger('pemasoks_id')->unsigned()->index();
            $table->bigInteger('users_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('pemasoks_id')->references('id')->on('pemasoks')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
}
