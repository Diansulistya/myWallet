<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'wallet_id' => \App\Models\Wallet::factory(),
            'expense_group_id' => \App\Models\ExpenseGroup::factory(),
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'reference' => 'EXP-' . $this->faker->unique()->regexify('[A-Z0-9]{8}'),
            'description' => $this->faker->sentence(),
        ];
    }
}