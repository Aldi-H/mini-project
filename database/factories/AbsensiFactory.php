<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

class AbsensiFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $waktuMasuk = $this->faker->time('H:i');
    $waktuKeluar = date('H:i', strtotime($waktuMasuk . ' +1 hours'));
    return [
      'id_kelas' => Kelas::factory()->create()->id(),
      'waktu_masuk' => $waktuMasuk,
      'waktu_keluar' => $waktuKeluar,
      'kode_absen' => $this->faker->unique()->regexify('[A-Za-z0-9]{5}'),
    ];
  }
}
