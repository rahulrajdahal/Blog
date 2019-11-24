<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => 'Laravel Blog',
        	'address' => 'Tangal, Lagankhel',
        	'contact_number' => '8 980 5452 7745',
        	'contact_email' => 'info@laravel_blog.com'
        ]);
    }
}
