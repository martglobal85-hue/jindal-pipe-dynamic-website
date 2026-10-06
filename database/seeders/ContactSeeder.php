<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run()
    {
        if (Contact::exists()) {
            return;
        }

        Contact::create([
            'email' => 'info@example.com',
            'mobile' => '+91 00000 00000',
            'address' => 'Your company address',
            'map' => 'https://maps.google.com',
            'footertext' => 'Copyright © ' . date('Y') . ' Your Company. All rights reserved.',
        ]);
    }
}
