<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExportController extends Controller
{   

    

    

   

    public function export()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('export/export');
    }

    
    
}



    



