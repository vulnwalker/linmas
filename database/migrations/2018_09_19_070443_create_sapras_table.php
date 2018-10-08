<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sapras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('jenis_sapras')->nullable();
            $table->text('merk')->nullable();
            $table->text('type')->nullable();
            $table->text('spesifikasi')->nullable();
            $table->text('tahun')->nullable();
            $table->text('kondisi')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sapras');
    }
}
