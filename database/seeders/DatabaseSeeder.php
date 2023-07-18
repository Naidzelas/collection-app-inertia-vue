<?php

namespace Database\Seeders;

use App\Models\Classifications\FinePenaltyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    protected array $data = [
        [
            'name' => 'dgdg',
            'price' => 44,
        ]
    ];


    public function run(): void
    {
        App/Models/Sega::factory()
            ->count(count($this->data))
            ->sequence(fn($sequence)=> $this->data[$sequence->index])
            ->create();
    }
}
