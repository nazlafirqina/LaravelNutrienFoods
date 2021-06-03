<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $m = Str::random(10);
        User::create([
            'name' => $m,
            'email' => $m,
            'password' => Hash::make('password'),
            'roles' => 'admin'
        ]);
    }
}
