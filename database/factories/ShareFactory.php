<?php

namespace Database\Factories;

use App\Models\CampaignMessage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Share>
 */
class ShareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'campaign_message_id' => CampaignMessage::factory(),
            'platform' => $this->faker->randomElement(['facebook', 'twitter', 'whatsapp']),
        ];
    }
}
