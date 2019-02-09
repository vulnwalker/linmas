<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linmas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('id_kecamatan')->nullable();
            $table->string('id_kelurahan')->nullable();
            $table->text('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('hp')->nullable();
            $table->string('no_ktp')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->text('alamat')->nullable();
            $table->text('alamat_kecamatan')->nullable();
            $table->text('alamat_kelurahan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('status_linmas')->nullable();
            $table->text('jenis_linmas')->nullable();
            $table->text('no_doc')->nullable();
            $table->text('foto')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('linmas');
    }
}
