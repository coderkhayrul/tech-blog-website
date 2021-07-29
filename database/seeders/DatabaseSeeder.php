<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Khayrul Shanto',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('admins')->insert([
            'email' => 'support@trickitworld@gmail.com',
            'phone_en' => '+8801835061968',
            'phone_ban' => '+৮৮০১৮৩৫০৬১৯৬৮',

        ]);
    }
}
