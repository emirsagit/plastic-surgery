<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $languages = config("admin.languages");
        return [
            'title' => $title = $this->faker->unique()->name,
            'slug' => Str::slug($title),
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl($width = 1000, $height = 562.5),
            'language' => $languages[rand(0, 2)],
            'seo_title' => $this->faker->sentence,
            'seo_description' => $this->faker->sentence,
            'alt' => $this->faker->word,
            'video' => $this->faker->word,
        ];
    }
}
