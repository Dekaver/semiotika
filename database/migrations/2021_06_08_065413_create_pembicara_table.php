<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembicaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembicara', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_semiotika')
                ->constrained('semiotika')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('nama');
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
        Schema::dropIfExists('pembicara');
    }
}
