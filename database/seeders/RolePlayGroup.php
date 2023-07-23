<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePlayGroup extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_play_groups')->insert(['id' => '1','name' => 'PENAMPILAN','role_id' => '3','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '2','name' => 'KONDISI LINGKUNGAN KERJA','role_id' => '3','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '3','name' => 'SIKAP MENGAWALI PELAYANAN','role_id' => '3','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '4','name' => 'SKILL SELAMA PELAYANAN','role_id' => '3','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '5','name' => 'SIKAP MENGAKHIRI PELAYANAN ','role_id' => '3','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '6','name' => 'KONDISI LINGKUNGAN MEJA KERJA TELLER','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '7','name' => 'PENAMPILAN TELLER (PILIH SALAH SATU SESUAI GENDER TELLER YANG MELAYANI)','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '8','name' => 'SIKAP TELLER','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '9','name' => 'SKILL TRANSAKSI (SETOR TUNAI)','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '10','name' => 'SKILL TRANSAKSI (TARIK TUNAI)','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '11','name' => 'SKILL TRANSAKSI (TRANSFER DEBET REKENING)','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '12','name' => 'SKILL TRANSAKSI (PENUKARAN UANG)','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '13','name' => 'SIKAP TELLER','role_id' => '4','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '14','name' => 'PENAMPILAN','role_id' => '2','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '15','name' => 'KONDISI MEJA KERJA','role_id' => '2','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '16','name' => 'SIKAP MENGAWALI PELAYANAN','role_id' => '2','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '17','name' => 'SIKAP SELAMA PELAYANAN','role_id' => '2','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '18','name' => 'SKILL LAYANAN','role_id' => '2','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
        DB::table('role_play_groups')->insert(['id' => '19','name' => 'SIKAP MENGAKHIRI LAYANAN','role_id' => '2','created_at' => '2023-07-24 02:47:22','updated_at' => '2023-07-24 02:47:22']);
    }
}
