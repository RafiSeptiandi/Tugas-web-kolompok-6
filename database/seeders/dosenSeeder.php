<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'nidn' => 8020200063,
            'nama' => 'Yuni Aghnaita Izzani S.Kom, M.Kom',
            'jabatan' => 'Rektor',
        ]);
        DB::table('dosen')->insert([
            'nidn' => 8020200212,
            'nama' => 'Kevin Perdi Hasan S.Kom, M.Kom',
            'jabatan' => 'Dekan',
        ]);
    }
}
