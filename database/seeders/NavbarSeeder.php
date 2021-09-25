<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'Home' => 'Home',
                'About' => 'About_US',
                'Contact_us' => 'Contact_US',
                'Services'=>1,
            ],
        ];

    }
}
