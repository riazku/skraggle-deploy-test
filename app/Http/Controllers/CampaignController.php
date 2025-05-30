<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{   

    public function getEmailContent()
    {
        return view('campaigns.tabs.email_tab');
    }

    public function getInteractionContent()
    {
        return view('campaigns.tabs.interaction_tab');
    }

    public function getWebpushContent()
    {
        return view('campaigns.tabs.webpush_tab');
    }

    public function getSurveyContent()
    {
        return view('campaigns.tabs.survey_tab');
    }


     // This method will handle GET /campaigns requests
    public function campaigns()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('campaigns/campaigns');
    }



    


}
