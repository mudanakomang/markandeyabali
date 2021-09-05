<?php

namespace Database\Seeders;

use App\Models\StatusMasuk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $status_masuk = [
            [
                'nama' => 'Reguler'
            ],
            [
                'nama' => 'Alih Kredit'
            ],
            [
                'nama' => 'Pindahan',
            ],
            [
                'nama' => 'RPL'
            ]
        ];
        StatusMasuk::insert($status_masuk);
    }
}
