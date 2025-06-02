<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportuserController extends Controller
{   

    public function getImportuseremailContent()
    {
        return view('importuser.tabs.manually_add_email_tab');
    }

    public function getImportuseruploadContent()
    {
        return view('importuser.tabs.upload_csv_tab');
    }

  


    
    // This method will handle GET /campaigns requests
    public function importuser()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('importuser/importuser');
    }
}
