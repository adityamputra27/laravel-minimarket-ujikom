<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('no_faktur', 50);
            $table->date('tgl_faktur');
            $table->double('total_bayar', 100, 0);
            $table->bigInteger('pelanggans_id')->unsigned()->index();
            $table->bigInteger('users_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('pelanggans_id')->references('id')->on('pelanggans')->onDelete('cascade');
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
        Schema::dropIfExists('penjualans');
    }
}
