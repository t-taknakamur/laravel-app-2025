<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'code' => 'PF001',
                'name' => '日本株A',
                'updated_by' => '管理者',
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'code' => 'PF002',
                'name' => '米国債券B',
                'updated_by' => '管理者',
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'category_id' => 3,
                'code' => 'PF003',
                'name' => '不動産C',
                'updated_by' => '管理者',
                'updated_at' => now(),
            ],
        ]);
    }
}
