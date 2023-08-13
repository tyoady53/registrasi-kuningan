<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenchMarkQuestions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bench_mark_questions')->insert(['id' => '1','group_id' => '1','parameter_question' => 'Sistematik isi Laporan Benchmark','score_weight' => '10','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '2','group_id' => '1','parameter_question' => 'Kelengkapan/ Detil Hasil Laporan Benchmark','score_weight' => '10','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '3','group_id' => '1','parameter_question' => 'Analisis Hasil Pelaksanaan Benchmark','score_weight' => '15','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '4','group_id' => '1','parameter_question' => 'Usulan Improvement dan Rencana Tindak Lanjut (Action plan) hasil pelaksanaan benchmark ','score_weight' => '15','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '5','group_id' => '2','parameter_question' => 'Cara menyampaikan materi menarik dan mudah dimengerti','score_weight' => '15','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '6','group_id' => '2','parameter_question' => 'Penguasaan terhadap bahan presentasi Hasil Pelaksanaan Benchmark','score_weight' => '20','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '7','group_id' => '2','parameter_question' => 'Ketepatan memberi jawaban ','score_weight' => '5','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '8','group_id' => '2','parameter_question' => 'Manajemen waktu ','score_weight' => '5','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
        DB::table('bench_mark_questions')->insert(['id' => '9','group_id' => '2','parameter_question' => 'Berpenampilan menarik dan Percaya Diri','score_weight' => '5','created_at' => '2023-08-12 16:16:00','updated_at' => '2023-08-12 16:16:00']);
    }
}
