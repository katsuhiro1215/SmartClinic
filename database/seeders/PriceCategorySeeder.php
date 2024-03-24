<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('price_categories')->insert([
                [
                    'name' => '整体',
                    'description' => null,
                ],
                [
                    'name' => 'ピラティス',
                    'description' => null,
                ],
            ]);
    }
}
