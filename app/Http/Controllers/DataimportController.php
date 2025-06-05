<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataimportController extends Controller
{   

     public function getDataimportoldpurchaseContent()
    {
        return view('dataimport.tabs.oldpurchase_tab');
    }

    public function getDataimportautoimportContent()
    {
        return view('dataimport.tabs.autoimport_tab');
    }

   

    public function dataimport()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('dataimport/dataimport');
    }

    
    
    }



    



