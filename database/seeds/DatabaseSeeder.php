<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        \App\User::create([
            'email'=>'support@crowdcrop.com',
            'password' => \Illuminate\Support\Facades\Hash::make('password'), // password
            'phone_number' => '',
            'name' => config('app.name'),
            'email_verified_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
