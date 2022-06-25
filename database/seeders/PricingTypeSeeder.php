<?php

namespace Database\Seeders;

use App\Models\PricingType;
use Illuminate\Database\Seeder;

class PricingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PricingType::create([
            'name' => "Fixed Price",
        ]);
        PricingType::create([
            'name' => "Hourly Pricing",
        ]);
        PricingType::create([
            'name' => "Bidding Price",
        ]);
    }
}
