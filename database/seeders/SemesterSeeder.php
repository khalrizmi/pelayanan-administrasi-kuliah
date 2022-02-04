<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::query()->insert(['nama' => 'Semester 1']);
        Semester::query()->insert(['nama' => 'Semester 2']);
        Semester::query()->insert(['nama' => 'Semester 3']);
        Semester::query()->insert(['nama' => 'Semester 4']);
        Semester::query()->insert(['nama' => 'Semester 5']);
        Semester::query()->insert(['nama' => 'Semester 6']);
        Semester::query()->insert(['nama' => 'Semester 7']);
        Semester::query()->insert(['nama' => 'Semester 8']);
    }
}
