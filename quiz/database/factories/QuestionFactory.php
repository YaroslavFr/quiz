<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                        'title'=>$this->faker->title('5'),
                        'question'=>$this->faker->text(20),
                        'answer'=>$this->faker->text(20),
                        'image'=>'',
                        'is_published'=>true
        ];
    }
}
