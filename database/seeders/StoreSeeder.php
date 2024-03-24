<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('stores')->insert([
            [
                'name' => 'ピラティス整骨院WellSIA',
                'type' => '姶良店',
                'code' => 'AIRA',
                'description' => '整骨院',
                'email' => '@gmail.com',
                'store_photo_path' => null,
                'store_logo_path' => null,
                'zipcode' => '899-5433',
                'address1' => '鹿児島県',
                'address2' => '姶良市',
                'address3' => '西宮島町',
                'address4' => '10-16',
                'phone_number' => '070-9031-3192',
                'fax_number' => null,
                'website' => 'https://pilates-wellsia.com',
                'facebook' => null,
                'twitter' => null,
                'instagram' => 'https://www.instagram.com/pilates_wellsia/',
                'youtube' => null,
                'line' => null,
                'established_date' => '2023-03-14',
                'status' => true,
            ],
        ]);
    }
}
