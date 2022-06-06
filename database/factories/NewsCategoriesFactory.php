<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\NewsCategories;
use App\Models\News;
use App\Models\Categories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsCategories>
 */
class NewsCategoriesFactory extends Factory

{

    protected $model=NewsCategories::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'id_new'=>$this->faker->numberBetween(1,150),
            'id_category'=> rand(1,6)
        ];
    }
}