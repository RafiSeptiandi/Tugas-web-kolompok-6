<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => 8020200026,
            'dosen_id'=>1,
            'nama' => 'Mikhail Claudio Ibrahim',
            'jurusan_id' => 2,
        ]);
        DB::table('mahasiswa')->insert([
            'nim' => 8020200027,
            'dosen_id'=>2,
            'nama' => 'Drenda Scheber',
            'jurusan_id' => 3,
        ]);
    }
}
