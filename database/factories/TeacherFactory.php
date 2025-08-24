<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $wali_kelas = $this->faker->numberBetween(1, 2) == 1 ? 'Ya' : 'Tidak';
        return [
            'name' => $this->faker->name(),
            'date_of_birth' => $this->faker->date('Y-m-d', '2009-12-12'),
            'address' => 'Jl. Neo Nusantara' . $this->faker->numberBetween(1, 99),
            'gender' => $this->faker->numberBetween(1, 2) == 2 ? 'Perempuan' : 'Laki-Laki',
            'homeroom_teacher' => $wali_kelas,
            'class_id' => $wali_kelas == 'Ya' ? Classes::inRandomOrder()->first()->class_id : null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
