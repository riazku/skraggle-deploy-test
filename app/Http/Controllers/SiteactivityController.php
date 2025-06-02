<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteactivityController extends Controller
{   

    public function getSitestatsContent()
    {
        return view('siteactivity.tabs.stats_tab');
    }

    public function getSiteactivityContent()
    {
        return view('siteactivity.tabs.activity_tab');
    }

    public function getSiteeventContent()
    {
        return view('siteactivity.tabs.events_tab');
    }

    public function getSiteexportContent()
    {
        return view('siteactivity.tabs.exports_tab');
    }


     // This method will handle GET /campaigns requests
    public function siteactivity()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('siteactivity/siteactivity');
    }



    


}
