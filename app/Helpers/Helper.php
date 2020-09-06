<?php

use App\Setting;

function getConfigValueFromSetting($config_key){
    $setting = Setting::where('config_key', $config_key)->first();
    if(!empty($setting))
    {
        return $setting->config_value;
    }
    return null;
}
