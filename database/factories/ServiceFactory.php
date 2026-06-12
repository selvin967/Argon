<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $services = [
            'Cambio de aceite',
            'Revisión de frenos',
            'Alineación de ruedas',
            'Cambio de llantas',
            'Servicio de aire acondicionado',
            'Cambio de filtro de aire',
            'Reparación de motor',
            'Limpieza de inyectores',
            'Cambio de baterías',
            'Revisión de suspensión',
        ];

        $categories = [
            'Mantenimiento',
            'Reparación',
            'Inspección',
            'Preventivo',
        ];

        return [
            'service_name' => $this->faker->randomElement($services),
            'service_category' => $this->faker->randomElement($categories),
            'description' => $this->faker->sentence(),
            'estimated_duration' => $this->faker->numberBetween(30, 480), // en minutos
            'base_price' => $this->faker->numberBetween(500, 5000),
            'status' => 'active',
        ];
    }
}
