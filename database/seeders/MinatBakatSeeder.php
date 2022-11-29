<?php

namespace Database\Seeders;

use App\Models\MinatBakat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinatBakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('minat_bakats')->insert(array(
            array(
                'minat_bakat'       => "Administrasi Sistem Jaringan",
                'nilai'             => 8,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'minat_bakat'       => "Analisis Database Server",
                'nilai'             => 9,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'minat_bakat'       => "Merakit, Merancang dan Memperbaiki Komputer",
                'nilai'             => 8,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'minat_bakat'       => "Mobile Developer",
                'nilai'             => 9,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'minat_bakat'       => "Problem Soloving",
                'nilai'             => 9,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
            array(
                'minat_bakat'       => "Software Engineer",
                'nilai'             => 9,
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s"),
            ),
        ));
    }
}


