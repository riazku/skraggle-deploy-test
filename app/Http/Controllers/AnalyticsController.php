<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalyticsController extends Controller
{   

    public function analytics()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('analytics/analytics');
    }

    
    
}



    



