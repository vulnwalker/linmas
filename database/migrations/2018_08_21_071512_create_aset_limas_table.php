<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsetLimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset_limas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->text('id_kecamatan')->nullable();
            $table->text('id_kelurahan')->nullable();
            $table->text('nama')->nullable();
            $table->text('kode_aset')->nullable();
            $table->text('jumlah')->nullable();
            $table->text('tahun_produksi')->nullable();
            $table->text('tahun_perolehan')->nullable();
            $table->text('merk')->nullable();
            $table->text('kondisi')->nullable();
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
        Schema::drop('aset_limas');
    }
}
