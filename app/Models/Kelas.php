<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
  use HasFactory;

  protected $table = 'kelas';

  protected $fillable = [
    'nama_kelas',
  ];

  public function materi()
  {
    return $this->belongsTo(Materi::class, 'id_materi');
  }

  public function user()
  {
    return $this->belongsToMany(User::class, 'kelas_users', 'id_kelas', 'id_user');
  }
}
