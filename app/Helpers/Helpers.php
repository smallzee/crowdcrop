<?php

function get_settings($setting_key){
    $setting_data = \App\Settings::where("settings_key",$setting_key)->first();
    return @$setting_data->settings_value;
}
