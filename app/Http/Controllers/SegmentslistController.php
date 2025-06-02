<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegmentslistController extends Controller
{   

    public function getSegmentlistmysegmentsContent()
    {
        return view('segmentslists.tabs.mysegment_tab');
    }

    public function getSegmentlistmylistsContent()
    {
        return view('segmentslists.tabs.mylist_tab');
    }

    public function getSegmentlistdefaultContent()
    {
        return view('segmentslists.tabs.default_tab');
    }



    
    // This method will handle GET /campaigns requests
    public function segmentslists()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('segmentslists/segmentslists');
    }
}
