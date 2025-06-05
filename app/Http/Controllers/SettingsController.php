<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{   

    public function getAttributeContent()
    {
        return view('setting.tabs.attributes_tab');
    }
    public function getOptinContent()
    {
        return view('setting.tabs.opt-in_tab');
    }

    public function getLimitsContent()
    {
        return view('setting.tabs.limits_tab');
    }

    
     
    public function settings()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('setting/settings');
    }



    


}
