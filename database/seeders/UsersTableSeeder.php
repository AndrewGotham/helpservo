<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                => 1,
                'name'              => 'Admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$UnLIBQB1uZZC1r5msFWTPuZCZsMBUpZINpJ48G5FmMxz6yVGP83rO', // password
                'remember_token'    => null,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
            [
                'id'             => 2,
                'name'           => 'Support 1',
                'email'          => 'support1@esperantejo.com',
                'email_verified_at' => now(),
                'password'       => '$2y$10$UnLIBQB1uZZC1r5msFWTPuZCZsMBUpZINpJ48G5FmMxz6yVGP83rO',
                'remember_token' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id'             => 3,
                'name'           => 'Support 2',
                'email'          => 'support2@esperantejo.com',
                'email_verified_at' => now(),
                'password'       => '$2y$10$UnLIBQB1uZZC1r5msFWTPuZCZsMBUpZINpJ48G5FmMxz6yVGP83rO',
                'remember_token' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'id'             => 4,
                'name'           => 'Support 3',
                'email'          => 'support3@esperantejo.com',
                'email_verified_at' => now(),
                'password'       => '$2y$10$UnLIBQB1uZZC1r5msFWTPuZCZsMBUpZINpJ48G5FmMxz6yVGP83rO',
                'remember_token' => null,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ];

        User::insert($users);
    }
}
