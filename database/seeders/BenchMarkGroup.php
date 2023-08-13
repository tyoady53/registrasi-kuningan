<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenchMarkGroup extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bench_mark_groups')->insert(['id' => '1','criteria' => 'ISI LAPORAN HASIL PELAKSANAAN BENCHMARK','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_groups')->insert(['id' => '2','criteria' => 'PRESENTASI LAPORAN HASIL PELAKSANAAN BENCHMARK','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
    }
}
