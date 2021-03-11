<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTampungBayarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tampung_bayars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penjualans_id')->unsigned()->index();
            $table->double('total', 100, 2);
            $table->double('terima', 100, 2);
            $table->double('kembali', 100, 2);
            $table->timestamps();

            $table->foreign('penjualans_id')->references('id')->on('penjualans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tampung_bayars');
    }
}
