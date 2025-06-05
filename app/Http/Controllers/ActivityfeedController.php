<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityfeedController extends Controller
{   

     public function getActivityfeedflowContent()
    {
        return view('activityfeed.tabs.flow_tab');
    }

    public function getActivityfeedplaygroundContent()
    {
        return view('activityfeed.tabs.playground_tab');
    }

   

    public function activityfeed()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('activityfeed/activityfeed');
    }

    
    
    }



    



