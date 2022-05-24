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
            'lecturer_id' => $this->faker->numberBetween(1,5),
            'project' => $this->faker->word(),
            'chapter1_url' => 'https://docs.google.com/document/d/14IEwB1qpxH2w0Mi221kW9SszOUpZg8kRFDB50d_8jlY/edit',
            'chapter2_url' => 'https://docs.google.com/document/d/1pMn59c2aVSwnWdj8UZYB48uOd1XVHhAhHUKEWbTimFM/edit',
            'chapter3_url' => 'https://docs.google.com/document/d/1KUdY6R8bhb043u2cPKWZED68BhfNHN13QKIjysqFa6A/edit',
            'chapter4_url' => 'https://docs.google.com/document/d/1NUCLDbrKRjsR7ZXZN12LGug6HwMvMHGvo--Qx0YIc1w/edit',
            'chapter5_url' => 'https://docs.google.com/document/d/1tNUdkwzAtFlNwA_kf8H0FibrIi0y6nfZ2Pw871GKfe0/edit',
            'password' => bcrypt('12345'),
        ];
    }
}
