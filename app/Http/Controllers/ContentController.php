<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{   

    public function getContentMyCampaignContent() {
        return view('content.tabs.content_mycampaign_tab'); // must match newsletter/email.blade.php
    }

    public function getContentScenariosContent() {
        return view('content.tabs.content_scenarios_tab');
    }   




    
    // This method will handle GET /campaigns requests
    public function content()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('content/content');
    }
}
