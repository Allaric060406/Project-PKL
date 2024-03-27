<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasanggerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasangger', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('category_id');
            $table->string('nama');
            $table->string('tujuan');
            $table->string('kendaraan');
            $table->date('berangkat');
            $table->date('pulang');
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
        Schema::dropIfExists('pasangger');
    }
}
