<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'lastname' => 'Meledje',
            'firstname' => 'Armel',
            'password' => Hash::make('armel06743632'),
            'password_without_hash' => 'armel06743632',
            'email' => 'meledjearmel@gmail.com',
        ]);

        $role = Role::where('title', '=', 'admin')->first();

        $user->role()->associate($role);

        $user->save();
    }
}
