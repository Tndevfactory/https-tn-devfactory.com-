<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use App\Models\Lab;
use Illuminate\Database\Eloquent\Factories\Factory;

class LabFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lab::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name'=> $this->faker->name(),
        'img_url2' => $this->faker->imageUrl($width = 640, $height = 480) ,
        'img_url3' =>  $this->faker->imageUrl($width = 641, $height = 480),
        'img_url1' =>  $this->faker->imageUrl($width = 64, $height = 480),
        'pdf_file' => Str::random(11),
        'zip_file' => Str::random(10),
        ];
    }
}
