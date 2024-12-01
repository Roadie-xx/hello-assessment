<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('orders')->insert([
                'bl_release_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'bl_release_user_id' => $faker->numberBetween(8, 18),
                'freight_payer_self' => $faker->numberBetween(0, 1),
                'contract_number' => 'Hello_' . 2024000 + $index,
                'bl_number' => Str::random(24),
            ]);
        }
    }
}
