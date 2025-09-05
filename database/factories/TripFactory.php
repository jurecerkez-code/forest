// database/factories/TripFactory.php
public function definition(): array
{
    return [
        'title' => $this->faker->sentence(3),
        'description' => $this->faker->paragraph(),
        'start_date' => $this->faker->date(),
        'end_date' => $this->faker->date(),
        'user_id' => 1,
    ];
}
