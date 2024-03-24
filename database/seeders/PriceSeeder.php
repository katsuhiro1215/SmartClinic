<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prices')->insert([
            [
                'price_category_id' => 1,
                'name' => '治療費',
                'price' => 6600,
            ],
            [
                'price_category_id' => 2,
                'name' => '治療費(パーソナルレッスン)',
                'price' => 6600,
            ],
            [
                'price_category_id' => 2,
                'name' => '治療費(ペアレッスン)',
                'price' => 3300,
            ],
            [
                'price_category_id' => 2,
                'name' => '治療費(グループレッスン)',
                'price' => 2500,
            ],
        ]);
    }
}
