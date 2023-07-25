<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_indo' => fake()->name,
            'nama_mandarin_hanzi' => fake()->name,
            'nama_mandarin_pinyin' => fake()->name,
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => fake()->date,
            'alamat' => fake()->address,
            'telp' => fake()->phoneNumber,
            'gol_darah' => null,
            'status_ketuhanan' => null,
            'status_vegetarian' => null,
            'status_qiu_dao' => null,
            'username' => fake()->userName,
            'password' => bcrypt('password'),
            'reset_pass' => 0,
            'image' => 'img/admin.jpeg',
            'active' => 0,
            'user_add' => 'Admin',
        ];
    }

    public function configure(): UserFactory
    {
        return $this->afterCreating(function (User $user) {
            $user->assignRole('Member');
        });
    }
}
