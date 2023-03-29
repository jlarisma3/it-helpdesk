<?php

namespace Database\Factories\User;

use App\Models\User\Role\Role;
use App\Models\User\Status\Status;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User\User>
 */
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(['gender' => 'male']),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_no' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => Role::where('code', 'admin')->first()->id,
            'status_id' => Status::where('code', 'activ')->first()->id,
        ];
    }
}
