<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('absensi', function (Blueprint $table) {
      $table->id();
      $table->foreignId('id_user');
      $table->dateTime('waktu_masuk');
      $table->dateTime('waktu_keluar');
      $table->string('kode_absen');
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
    Schema::dropIfExists('absensi');
  }
}
