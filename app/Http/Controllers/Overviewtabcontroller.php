<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewTabController extends Controller
{
    public function getOverviewContent()
    {
        return view('home.tabs.overview');
    }

    public function getGetStartedContent()
    {
        return view('home.tabs.getstarted');
    }

    public function getCockpitContent()
    {
        return view('home.tabs.cockpit');
    }


 // This method will handle GET /campaigns requests
    public function index()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('home/home');
    }


}