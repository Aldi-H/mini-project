<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
  use HasFactory;

  protected $table = 'absensi';

  protected $fillable = [
    'id_user',
    'waktu_masuk',
    'waktu_keluar',
    'kode_absen',
    'status',
  ];

  public function kelas()
  {
    return $this->belongsTo(Kelas::class, 'id_kelas');
  }
}
