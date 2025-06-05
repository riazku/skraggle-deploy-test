<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BilingController extends Controller
{   

    public function getBilingusageContent()
    {
        return view('biling.tabs.usage_tab');
    }

    public function getBilinghistoryContent()
    {
        return view('biling.tabs.history_tab');
    }

    
    public function getBilinginfoContent()
    {
        return view('biling.tabs.info_tab');
    }
  


    
    // This method will handle GET /campaigns requests
    public function biling()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('biling/biling');
    }
}
