<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicropollController extends Controller
{   

    public function getMicropollMyCampaignContent() {
        return view('micropoll.tabs.micropoll_mycampaign_tab'); // must match newsletter/email.blade.php
    }

    public function getMicropollScenariosContent() {
        return view('micropoll.tabs.micropoll_scenarios_tab');
    }   




    
    // This method will handle GET /campaigns requests
    public function micropoll()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('micropoll/micropoll');
    }
}
