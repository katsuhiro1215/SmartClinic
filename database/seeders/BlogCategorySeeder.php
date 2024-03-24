<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('blog_categories')->insert([
            [
                'name' => 'お知らせ',
                'slug' => 'news',
                'description' => null,
            ],
        ]);
    }
}
