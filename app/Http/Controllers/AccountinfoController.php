<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountinfoController extends Controller
{   

     public function getAccountinfoContent()
    {
        return view('accountinfo.tabs.info_tab');
    }

    public function getAccountnotificationContent()
    {
        return view('accountinfo.tabs.notification_tab');
    }

    public function getAccountcodeContent()
    {
        return view('accountinfo.tabs.code_tab');
    }

    public function getAccountapiContent()
    {
        return view('accountinfo.tabs.api_tab');
    }

   

    public function accountinfo()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('accountinfo/accountinfo');
    }

    
    
    }



    



