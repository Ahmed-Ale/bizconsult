<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::UpdateOrCreate(['id' => 1], [
            'address' => 'Address 1',
            'phone' => '0123456789',
            'email' => 'info@info.com',
            'facebook' => 'My Facebook',
            'twitter' => 'My Twitter',
            'youtube' => 'My Youtube',
            'linkedin' => 'My Linkedin',
            'instagram' => 'My Instagram',
        ]);
    }
}
