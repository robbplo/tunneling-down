<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Brand::factory(5)
            ->state(new Sequence(
                ['name' => 'Opel'],
                ['name' => 'Volkswagen'],
                ['name' => 'Honda'],
                ['name' => 'Ford'],
                ['name' => 'Hyundai'],
            ))
            ->hasCars(5)
            ->create();
    }
}
