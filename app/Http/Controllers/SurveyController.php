<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{   

    public function getSurveyMyCampaignContent() {
        return view('survey.tabs.survey_mycampaign_tab'); // must match newsletter/email.blade.php
    }

    public function getSurveyScenariosContent() {
        return view('survey.tabs.survey_scenarios_tab');
    }   




    
    // This method will handle GET /campaigns requests
    public function survey()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('survey/survey');
    }
}
