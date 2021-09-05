<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
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
        $file = database_path('seeders/file/mahasiswa.csv');
        $mahasiswa = $this->csvToArray($file);
        foreach($mahasiswa as $data){
            Mahasiswa::insert($data);
        }

    }
    public function csvToArray($file, $delimiter = ','){
        if (!file_exists($file) || !is_readable($file))
        return false;

        $header = null;
        $data = array();
        if (($handle = fopen($file, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }
}
