<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailsettingController extends Controller
{   


    public function emailsetting()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('emailsetting/emailsetting');
    }

    
    
}



    



