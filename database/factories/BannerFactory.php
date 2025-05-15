<?php

declare(strict_types=1);

namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Models\Banner;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Blog\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Banner>
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
<<<<<<< Updated upstream
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(2),
            'is_active' => fake()->boolean(),
            'position' => fake()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
=======
     * @return array
=======
     * @return array<string, mixed>
>>>>>>> Stashed changes
     */
    public function definition(): array
    {
        return [
<<<<<<< Updated upstream
            'title' => fake()->sentence,
            // 'slug' => $this->faker->slug,
>>>>>>> 55e41ec (.)
=======
            'title' => fake()->sentence(),
            'slug' => fake()->slug(2),
            'is_active' => fake()->boolean(),
            'position' => fake()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
>>>>>>> Stashed changes
        ];
    }
}
