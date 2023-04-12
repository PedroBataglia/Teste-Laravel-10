<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('core_status')->insert([
            [
                'name' => 'Ativo',
                'created_at' => Carbon::now()->format('Y-m-d-H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d-H:i:s'),
            ],
            [
                'name' => 'Pendente',
                'created_at' => Carbon::now()->format('Y-m-d-H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d-H:i:s'),
            ],
            [
                'name' => 'Rascunho',
                'created_at' => Carbon::now()->format('Y-m-d-H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d-H:i:s'),
            ],
            [
                'name' => 'Desativado',
                'created_at' => Carbon::now()->format('Y-m-d-H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d-H:i:s'),
            ],
            [
                'name' => 'Cancelado',
                'created_at' => Carbon::now()->format('Y-m-d-H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d-H:i:s'),
            ],
        ]);
    }
}
