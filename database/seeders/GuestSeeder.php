<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::factory(10)
            ->state(new Sequence(
                ['published_at' => null],
                ['published_at' => now()],
                ['published_at' => now()->subDays(rand(2, 40))],
            ))
            ->create();
    }
}
