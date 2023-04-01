<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'category' => 'expenditure',
                'amount' => 50000,
                'description' => 'Testing 1'
            ],
            [
                'user_id' => 2,
                'category' => 'income',
                'amount' => 10000,
                'description' => 'Testing 2'
            ],
            [
                'user_id' => 1,
                'category' => 'expenditure',
                'amount' => 50000,
                'description' => 'Testing 3'
            ],
            [
                'user_id' => 2,
                'category' => 'income',
                'amount' => 5000,
                'description' => 'Testing 4'
            ]
        ];

        foreach($data as $row){
            Transaction::create([
                'user_id' => $row['user_id'],
                'category' => $row['category'],
                'amount' => $row['amount'],
                'description' => $row['description']
            ]);
        }
    }
}
