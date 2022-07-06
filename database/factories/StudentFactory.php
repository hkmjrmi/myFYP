<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'student_id' => $this->faker->unique()->numerify(),
            'supervisor_id' => $this->faker->numberBetween(1,5),
            'lecturer_id' => 1,
            'project' => $this->faker->word(),
            'chapter1_url' => '',
            'chapter2_url' => '',
            'chapter3_url' => '',
            'chapter4_url' => '',
            'chapter5_url' => '',
            'password' => bcrypt('12345'),
        ];
    }
}
