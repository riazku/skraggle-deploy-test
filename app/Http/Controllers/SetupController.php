<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{   

    public function getSetupCatalogContent()
    {
        return view('setup_catalog.tabs.catalog_tab');
    }

    public function getSetupparsingContent()
    {
        return view('setup_catalog.tabs.parsing_tab');
    }

    public function getSetupautofeedContent()
    {
        return view('setup_catalog.tabs.autofeed_tab');
    }

    public function getSetuppreviewContent()
    {
        return view('setup_catalog.tabs.preview_tab');
    }

    public function getSetupexportcontent()
    {
        return view('setup_catalog.tabs.export_tab');
    }

    public function getSetupdatafeedContent()
    {
        return view('setup_catalog.tabs.datafeed_tab');
    }

    

  


    
    // This method will handle GET /campaigns requests
    public function setup()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('setup_catalog/setup');
    }
}
