<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * DEVELOPMENT CREDENTIALS ONLY.
     * Override with ADMIN_EMAIL / ADMIN_PASSWORD in .env and change the
     * password immediately in production.
     */
    public function run()
    {
        Admin::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@example.com')],
            [
                'name' => 'Administrator',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'Admin@12345')),
            ]
        );
    }
}
