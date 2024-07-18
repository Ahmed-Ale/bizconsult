<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            [
                'title' => 'Best In Industry',
                'icon' => 'fa fa-cubes',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
            ],
            [
                'title' => '99% Success Rate',
                'icon' => 'fa fa-percent',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
            ],
            [
                'title' => 'Award Winning',
                'icon' => 'fa fa-award',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
            ],
            [
                'title' => '100% Happy Client',
                'icon' => 'fa fa-smile-beam',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
            ],
            [
                'title' => 'Professional Advisors',
                'icon' => 'fa fa-user-tie',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
            ],
            [
                'title' => '24/7 Customer Support',
                'icon' => 'fa fa-headset',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
            ],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
