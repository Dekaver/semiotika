<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemakalahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakalah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_semiotika')
                ->constrained('semiotika')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->json('benefit');
            $table->json('jenis');
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
        Schema::dropIfExists('pemakalah');
    }
}
