<?php

declare(strict_types=1);

namespace Modules\Gdpr\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 7405a7d4 (first)
use Modules\Gdpr\Models\Consent;

class ConsentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
<<<<<<< HEAD
     * @var class-string<Model>
=======
     * @var class-string<\Illuminate\Database\Eloquent\Model>
>>>>>>> 7405a7d4 (first)
     */
    protected $model = Consent::class;

    /**
     * Define the model's default state.
<<<<<<< HEAD
     */
    public function definition(): array
    {
        return [
=======
     *
     * @return array
     */
    public function definition()
    {

        return [

>>>>>>> 7405a7d4 (first)
        ];
    }
}
