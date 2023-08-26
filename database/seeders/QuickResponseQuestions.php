<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuickResponseQuestions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quick_response_questions')->insert(['id' => '1','parameter_question' => 'Penampilan menarik dan Percaya Diri','score_weight' => '10','created_at' => '2023-08-14 23:00:00','updated_at' => '2023-08-14 23:00:00']);
        DB::table('quick_response_questions')->insert(['id' => '2','parameter_question' => 'Penggunaan dan penyampaian tata bahasa jelas dan benar (Mudah dimengerti)','score_weight' => '10','created_at' => '2023-08-14 23:00:00','updated_at' => '2023-08-14 23:00:00']);
        DB::table('quick_response_questions')->insert(['id' => '3','parameter_question' => 'Efektivitas Penggunaan Waktu Dalam Menjawab Pertanyaan','score_weight' => '10','created_at' => '2023-08-14 23:00:00','updated_at' => '2023-08-14 23:00:00']);
        DB::table('quick_response_questions')->insert(['id' => '4','parameter_question' => 'Visionary Leaders, (hasil jawaban merupakan upaya untuk memberikan yang terbaik untuk perusahaan) dan memperlihatkan kecerdasan emosional (emotional Intelegent)','score_weight' => '20','created_at' => '2023-08-14 23:00:00','updated_at' => '2023-08-14 23:00:00']);
        DB::table('quick_response_questions')->insert(['id' => '5','parameter_question' => 'Ketepatan memberikan jawaban','score_weight' => '50','created_at' => '2023-08-14 23:00:00','updated_at' => '2023-08-14 23:00:00']);
    }
}
