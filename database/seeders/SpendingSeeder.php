<?php

namespace Database\Seeders;

use App\Models\Outcome;
use App\Models\Spending;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spending::factory()->count(30)->create();
    }
}
