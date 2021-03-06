<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemiotikaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semiotika', function (Blueprint $table) {
            $table->id();
            $table->string('periode');
            $table->string('lokasi');
            $table->string('gps');
            $table->time('waktu');
            $table->date('Tanggal');
            $table->longText('Tentang');
            $table->text('deskripsi_pendaftaraan');
            $table->string('link_pendaftaraan');
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
        Schema::dropIfExists('semiotika');
    }
}