<?php

namespace Database\Seeders;

use App\Models\ProfesiKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesiKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesi_kerjas')->insert(array(
            array(
                'nama_profesi'      => "Computer Network/Data Engineer",
                'nilai'             => 9,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'nama_profesi'      => "Database Engineer / Database Administrator",
                'nilai'             => 5,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'nama_profesi'      => "Designer Grafis",
                'nilai'             => 6,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'nama_profesi'      => "Developer IT",
                'nilai'             => 17,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'nama_profesi'      => "Software Engineer",
                'nilai'             => 8,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'nama_profesi'      => "System Analyst dan System Integrator",
                'nilai'             => 7,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
        ));
    }
}