<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContoh1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contoh1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('umur');
            $table->string('hobi');
            $table->string('alamat');
            $table->string('cita');
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
        Schema::dropIfExists('contoh1s');
    }
}
