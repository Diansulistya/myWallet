<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Wallet;
use App\Models\ExpenseGroup;
use App\Models\Expense;
use App\Models\Topup;
use App\Models\TopupMethod;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create users
        $users = User::factory()->createMany([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
            ],
        ]);

        // Create wallets for users
        $wallets = collect();
        foreach ($users as $user) {
            $wallets->push(Wallet::create([
                'user_id' => $user->id,
                'balance' => 1000.00,
            ]));
        }

        // Create expense groups
        $expenseGroups = ExpenseGroup::factory()->createMany([
            ['name' => 'Food & Dining', 'description' => 'Restaurants, groceries, and food delivery'],
            ['name' => 'Transportation', 'description' => 'Gas, public transport, and ride-sharing'],
            ['name' => 'Entertainment', 'description' => 'Movies, games, and leisure activities'],
            ['name' => 'Shopping', 'description' => 'Clothing, electronics, and other purchases'],
            ['name' => 'Bills & Utilities', 'description' => 'Rent, electricity, water, and internet'],
        ]);

        // Create expenses
        foreach ($wallets as $wallet) {
            Expense::factory()->createMany([
                [
                    'wallet_id' => $wallet->id,
                    'expense_group_id' => $expenseGroups[0]->id, // Food & Dining
                    'amount' => 25.50,
                    'reference' => 'EXP-' . uniqid(),
                    'description' => 'Lunch at restaurant',
                ],
                [
                    'wallet_id' => $wallet->id,
                    'expense_group_id' => $expenseGroups[1]->id, // Transportation
                    'amount' => 15.00,
                    'reference' => 'EXP-' . uniqid(),
                    'description' => 'Gas refill',
                ],
                [
                    'wallet_id' => $wallet->id,
                    'expense_group_id' => $expenseGroups[2]->id, // Entertainment
                    'amount' => 12.99,
                    'reference' => 'EXP-' . uniqid(),
                    'description' => 'Movie ticket',
                ],
            ]);
        }

        // Create topups
        foreach ($wallets as $wallet) {
            $topup = Topup::create([
                'wallet_id' => $wallet->id,
                'amount' => 500.00,
                'reference' => 'TOP-' . uniqid(),
                'status' => 'completed',
                'metadata' => ['method' => 'bank_transfer', 'bank' => 'ABC Bank'],
            ]);
        }
    }
}