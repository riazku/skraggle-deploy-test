<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevenueController extends Controller
{   

    public function getRevenueCampaignContent() {
        return view('revenue.tabs.revenue_campaign_tab'); // must match newsletter/email.blade.php
    }

    public function getRevenueReportContent() {
        return view('revenue.tabs.revenue_report_tab');
    }   




    
    // This method will handle GET /campaigns requests
    public function revenue()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('revenue/revenue');
    }
}
