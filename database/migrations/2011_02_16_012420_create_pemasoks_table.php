<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasoks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemasok', 255);
            $table->string('nama_pemasok', 255);
            $table->text('alamat');
            $table->string('kota', 255);
            $table->string('no_telp', 50);
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
        Schema::dropIfExists('pemasoks');
    }
}
