<?php

namespace Database\Seeders;

use App\Models\PembayaranItem;
use Illuminate\Database\Seeder;

class PembayaranItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PembayaranItem::query()->insert([
            'nama' => 'UTS Semester 1',
            'harga' => 1800000
        ]);

        PembayaranItem::query()->insert([
            'nama' => 'UAS Semester 1',
            'harga' => 1800000
        ]);

        PembayaranItem::query()->insert([
            'nama' => 'UTS Semester 2',
            'harga' => 1800000
        ]);

        PembayaranItem::query()->insert([
            'nama' => 'UAS Semester 2',
            'harga' => 1800000
        ]);

        PembayaranItem::query()->insert([
            'nama' => 'UTS Semester 3',
            'harga' => 1800000
        ]);

        PembayaranItem::query()->insert([
            'nama' => 'UAS Semester 3',
            'harga' => 1800000
        ]);

        PembayaranItem::query()->insert([
            'nama' => 'UTS Semester 4',
            'harga' => 1800000
        ]);

        PembayaranItem::query()->insert([
            'nama' => 'UAS Semester 4',
            'harga' => 1800000
        ]);
    }
}
