<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Human;
use App\Models\Car;

use Database\Factories\AnimalFactory;
use Database\Factories\CarFactory;
use Database\Factories\HumanFactory;
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
        // \App\Models\User::factory(10)->create();
        Human::factory(100)->create();
        Animal::factory(100)->create();
        Car::factory(100)->create();
    }
}
