<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jurusan =  [
            ['nama' => 'Pend. Bahasa Indonesia'],
            ['nama' => 'Pend. Bahasa Inggris'],
            ['nama' => 'PGSD'],
            ['nama' => 'Sistem Informasi']
        ];
        Jurusan::insert($jurusan);
    }
}
