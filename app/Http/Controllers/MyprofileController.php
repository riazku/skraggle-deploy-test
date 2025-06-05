<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyprofileController extends Controller

{   
    public function getMyprofileContent()
    {
        return view('myprofile.tabs.profile_tab');
    }

     public function getMyprofileaccessContent()
    {
         return view('myprofile.tabs.access_tab');
    }

    

   

    public function myprofile()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('myprofile/myprofile');
    }
 
 
    
}



    



