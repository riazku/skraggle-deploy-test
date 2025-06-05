<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsettingController extends Controller
{   

    public function getAccountsettingContent()
    {
        return view('accountsetting.tabs.setting_tab');
    }

    public function getAccountjsintegrationContent()
    {
        return view('accountsetting.tabs.jsintegration_tab');
    }

    public function getAccountjsadvanceContent()
    {
        return view('accountsetting.tabs.advance_tab');
    }

    public function getAccounttrackingContent()
    {
        return view('accountsetting.tabs.tracking_tab');
    }

   

    public function accountsetting()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('accountsetting/accountsetting');
    }

    
    
    }



    



