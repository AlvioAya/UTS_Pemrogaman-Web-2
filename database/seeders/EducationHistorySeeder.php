<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationHistorySeeder extends Seeder
{
    public function run()
    {
        DB::table('education_histories')->insert([
            [
                'school_name' => 'SD NEGERI 2 PESIDO',
                'degree' => '-',
                'start_year' => 2012,
                'end_year' => 2018,
            ],
            [
                'school_name' => 'SMP NEGERI 1 JATIROTO',
                'degree' => '-',
                'start_year' => 2018,
                'end_year' => 2021,
            ],
            [
                'school_name' => 'SMK NEGERI 1 JATIROTO',
                'degree' => 'Software Engineering',
                'start_year' => 2021,
                'end_year' => 2024,
            ],
            [
                'school_name' => 'POLITEKNIK INDONUSA SURAKARTA',
                'degree' => 'Software Engineering Techology',
                'start_year' => 2024,
                'end_year' => 2028,
            ],
        ]);
    }
}
