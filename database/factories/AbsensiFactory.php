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
    $waktuMasuk = $this->faker->dateTimeBetween('-1 day', 'now')->format('Y-m-d H:i:s');
    $waktuKeluar = $this->faker->dateTimeBetween($waktuMasuk, '+1 hour')->format('Y-m-d H:i:s');
    return [
      'id_kelas' => Kelas::factory()->create()->id,
      'waktu_masuk' => $waktuMasuk,
      'waktu_keluar' => $waktuKeluar,
      'kode_absen' => $this->faker->unique()->regexify('[A-Za-z0-9]{5}'),
    ];
  }
}
