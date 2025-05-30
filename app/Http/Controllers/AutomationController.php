<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutomationController extends Controller
{   

    public function getMycampaignContent()
    {
        return view('automation.tabs.mycampaign_tab');
    }

    public function getScenariosContent()
    {
        return view('automation.tabs.scenarios_tab');
    }

  


    
    // This method will handle GET /campaigns requests
    public function automation()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('automation/automation');
    }
}
