<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('kecamatan')->nullable();
            $table->text('alamat')->nullable();
            $table->text('telp')->nullable();
            $table->text('fax')->nullable();
            $table->text('nama_camat')->nullable();
            $table->text('nip_camat')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kecamatans');
    }
}
