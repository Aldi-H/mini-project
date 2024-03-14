<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\Materi;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */

  protected $model = Kelas::class;

  public function definition()
  {
    return [
      'id_materi' => Materi::factory()->create()->id,
      'nama_kelas' => $this->faker->word(),
    ];
  }
}
