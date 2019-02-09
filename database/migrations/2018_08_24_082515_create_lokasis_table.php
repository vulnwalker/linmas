<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('lokasis', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->softDeletes();
          $table->text('id_kecamatan')->nullable();
          $table->text('id_kelurahan')->nullable();
          $table->text('nama')->nullable();
          $table->text('lokasi')->nullable();
          $table->text('kondisi')->nullable();
          $table->text('kelengkapan')->nullable();
          $table->text('sarpras')->nullable();
          $table->text('aktifitas')->nullable();
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
        Schema::dropIfExists('lokasis');
    }
}
