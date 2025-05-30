<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteractionController extends Controller
{   

    public function getInteractionMycampaignContent()
    {
        return view('interaction.tabs.interaction_mycampaign_tab');
    }

    public function getInteractionScenariosContent()
    {
        return view('interaction.tabs.interaction_scenarios_tab');
    }

  


    
    // This method will handle GET /campaigns requests
    public function interaction()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('interaction/interaction');
    }
}
