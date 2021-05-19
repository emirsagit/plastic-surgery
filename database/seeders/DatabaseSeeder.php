<?php

namespace Database\Seeders;

use App\Models\Service;
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
        $services = Service::factory(10)->create();

        foreach ($services as $service) {
            Service::factory(rand(0, 15))->create([
                'parent' => $service->id
            ]);
        }
    }
}
