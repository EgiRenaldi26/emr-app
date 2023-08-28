<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa;

class DataSiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datasiswa = [
            [
                'nisn' => '12344',
                'nama_lengkap' => 'Renal',
                'nama_kelas' => 'RPL 1',
                'sakit' => 'perut',
                'tanggal' => '',
                'nama_obat' => 'paramek',
                'alamat' => 'subang',
                'status' => 'sembuh',
            ]
        ];

        // Simpan data ke dalam database menggunakan model siswa (datasiswa)
        foreach ($datasiswa as $data) {
            siswa::create($data);
        }
    }
}
