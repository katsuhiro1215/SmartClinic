<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Customer;
use App\Models\CustomerInformation;
use App\Models\Schedule;
use App\Models\Threapist;
use App\Models\TreatmentCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(UserProfileSeeder::class);
        $this->call(StoreSeeder::class);
        Customer::factory(100)->create();
        CustomerInformation::factory(100)->create();
        Threapist::factory(3)->create();
        $this->call(TreatmentCategorySeeder::class);
        $this->call(TreatmentSeeder::class);
        Schedule::factory(100)->create();
        $this->call(PriceCategorySeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(BlogCategorySeeder::class);
        Blog::factory(100)->create();
        Appointment::factory(100)->create();
    }
}
