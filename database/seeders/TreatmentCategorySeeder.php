<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('treatment_categories')->insert([
            [
                'name' => '整体',
                'description' => null,
            ],
            [
                'name' => 'ピラティス',
                'description' => null,
            ],
            [
                'name' => '整体',
                'description' => null,
            ],
        ]);
    }
}
