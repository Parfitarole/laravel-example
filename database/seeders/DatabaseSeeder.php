<?php

namespace Database\Seeders;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create default admin user
        DB::table('accounts')->insert([
            'email'        => 'admin@example.com',
            'username'     => 'Admin',
            'password'     => Hash::make('Testing123'),
            'access_level' => 9,
            'created_at'   => '1970-01-01 00:00:01',
            'updated_at'   => '1970-01-01 00:00:01'
        ]);

        // Populate Accounts table with random data
        Account::factory()->count(24)->create();
    }
}
