<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use App\Models\SparePart;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear datos de prueba para Spare Parts
        SparePart::factory(15)->create();

        // Crear datos de prueba para Services
        Service::factory(12)->create();

        // Crear usuarios solo si no existen
        if (User::count() === 0) {
            User::factory()->create(
                [
                    'name' => 'prueba',
                    'email' => 'prueba@gmail.com',
                    'password' => bcrypt('prueba@gmail.com')
                ],
            );

            User::factory()->create(
                [
                    'name' => 'Limber Rodriguez',
                    'email' => 'limber@gmail.com',
                    'password' => bcrypt('limber@gmail.com')
                ],
            );

            User::factory()->create(
                [
                    'name' => 'Test User',
                    'email' => 'test@gmail.com',
                    'password' => bcrypt('test@gmail.com')
                ],
            );
        }

        // Category::factory(7)->create();
        // Post::factory(20)->create();
        // Animal::factory(5)->create();
    }
}
