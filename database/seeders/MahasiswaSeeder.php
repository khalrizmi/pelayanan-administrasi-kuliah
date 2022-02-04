<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();

        for ($i = 1; $i <= 12; $i++) {
            Mahasiswa::query()->create([
                'nim' => '1921010' . ($i + 10),
                'nama' => $faker->name,
                'jurusan_id' => rand(1, 2),
                'semester_id' => rand(1, 7),
                'nomor_telepon' => $faker->phoneNumber
            ]);
        }
    }
}
