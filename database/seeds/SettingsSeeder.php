<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
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
            'settings_key'=>'office_address',
            'settings_value' => 'address',
            'settings_description'=>'Office Address',
            'settings_type'=>'website information',
            'settings_input_type'=>'text'
        ]);

        \App\Settings::create([
            'settings_key'=>'official_email',
            'settings_value' => 'support@'.config('app.name').'.com',
            'settings_description'=>'Official Email',
            'settings_type'=>'website information',
            'settings_input_type'=>'text'
        ]);

        \App\Settings::create([
            'settings_key'=>'office_contact',
            'settings_value' => '090',
            'settings_description'=>'Official Contact',
            'settings_type'=>'website information',
            'settings_input_type'=>'text'
        ]);

        \App\Settings::create([
            'settings_key'=>'site_key',
            'settings_value' => '6LeZlWUiAAAAAChLEimTQ7xGVJU8Gk6mDxecetiy',
            'settings_description'=>'reCAPTCHA Site Key',
            'settings_type'=>'website information',
            'settings_input_type'=>'text'
        ]);

        \App\Settings::create([
            'settings_key'=>'secret_key',
            'settings_value' => '6LeZlWUiAAAAAH4V_2xnN6i8fnTUlLeskVOrBKLe',
            'settings_description'=>'reCAPTCHA Secret Key',
            'settings_type'=>'website information',
            'settings_input_type'=>'text'
        ]);
    }
}
