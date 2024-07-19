<?php

namespace Database\Seeders;

use App\Models\testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assets = asset('front-assets');
        $testimonials = [
            [
                'name' => 'Client Name',
                'position' => 'Profession',
                'description' => 'Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam',
                'image' => "$assets/img/testimonial-1.jpg",
            ],
            [
                'name' => 'Client Name',
                'position' => 'Profession',
                'description' => 'Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam',
                'image' => "$assets/img/testimonial-2.jpg",
            ],
            [
                'name' => 'Client Name',
                'position' => 'Profession',
                'description' => 'Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam',
                'image' => "$assets/img/testimonial-3.jpg",
            ],
            [
                'name' => 'Client Name',
                'position' => 'Profession',
                'description' => 'Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam',
                'image' => "$assets/img/testimonial-4.jpg",
            ],
        ];

        foreach ($testimonials as $testimonial) {
            testimonial::create($testimonial);
        }
    }
}
