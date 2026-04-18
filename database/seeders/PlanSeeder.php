<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'name' => 'Basic',
                'price' => 0.00,
                'duration' => 30,
                'features' => json_encode([
                    'max_devices' => 1,
                    'button' => false
                ]),
            ],
            [
                'name' => 'Pro',
                'price' => 20000.00,
                'duration' => 30,
                'features' => json_encode([
                    'max_devices' => 5,
                    'button' => true
                ]),
            ],
            [
                'name' => 'Enterprise',
                'price' => 50000.00,
                'duration' => 30,
                'features' => json_encode([
                    'max_devices' => 10,
                    'button' => true
                ]),
            ],
        ]);
    }
}
