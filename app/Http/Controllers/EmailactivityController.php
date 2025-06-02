<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailactivityController extends Controller
{   

    public function getEmaileventContent()
    {
        return view('emailactivity.tabs.events_tab');
    }

    public function getEmailclickContent()
    {
        return view('emailactivity.tabs.clicks_tab');
    }

    public function emailactivity()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('emailactivity/emailactivity');
    }

    
    
    }



    



