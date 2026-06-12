<?php

namespace Database\Factories;

use App\Models\SparePart;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SparePart>
 */
class SparePartFactory extends Factory
{
    protected $model = SparePart::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'part_name' => $this->faker->word(),
            'brand' => $this->faker->company(),
            'description' => $this->faker->sentence(),
            'unit_price' => $this->faker->numberBetween(100, 5000),
            'stock_quantity' => $this->faker->numberBetween(5, 100),
            'supplier' => $this->faker->company(),
            'purchase_date' => $this->faker->date(),
            'status' => 'active',
        ];
    }
}
