<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Settings::create([
            'name'=>'Super Admin'
        ]);

        \App\Settings::create([
            'name'=>'Agent'
        ]);
    }
}
