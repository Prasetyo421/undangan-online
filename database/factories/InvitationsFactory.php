<?php

namespace Database\Factories;

use App\Models\Invitations;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvitationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invitations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 3),
            'design_id' => 1,
            'slug' => $this->faker->slug(2),
            'cover_image' => 'invitation-images\maEuCHEEqIrlw4xzqE5K95ZsM6Iep6quSZdApv6o.png',
            'groom_name' => $this->faker->userName(),
            'groom_full_name' => $this->faker->name(),
            'groom_info' => $this->faker->name(),
            'groom_image' => 'invitation-images\6fCU2Q42KnPFvtV2gVkOAw86dg5LWyfScR9lIX59.png',
            'bride_name' => $this->faker->userName(),
            'bride_full_name' => $this->faker->name(),
            'bride_info' => $this->faker->name(),
            'bride_image' => 'invitation-images\CAV8AOtO8YB7DlXCb829unZ0z5LjJDSqDI4CgOz8.png',
            'wedding_date' => '2021-10-30',
            'wedding_time_start' => '14:54',
            'wedding_time_end' => '15:54',
            'wedding_venue' => $this->faker->city(),
            'wedding_venue_address' => $this->faker->address(),
            'reseption_date' => '2021-10-30',
            'reseption_time_start' => '16:54',
            'reseption_time_end' => '17:54',
            'reseption_venue' => $this->faker->city(),
            'reseption_venue_address' => $this->faker->address(),
        ];
    }
}
