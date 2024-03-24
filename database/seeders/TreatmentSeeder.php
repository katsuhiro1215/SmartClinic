<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('treatments')->insert([
            [
                'treatment_category_id' => 1,
                'name' => '整体',
                'description' => null,
            ],
            [
                'treatment_category_id' => 2,
                'name' => 'パーソナルレッスン',
                'description' => null,
            ],
            [
                'treatment_category_id' => 2,
                'name' => 'ペアレッスン',
                'description' => null,
            ],
            [
                'treatment_category_id' => 3,
                'name' => 'グループレッスン',
                'description' => null,
            ],
        ]);
    }
}
