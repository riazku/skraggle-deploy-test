<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   

    public function getUserOverviewContent() {
        return view('user.tabs.user_overview_tab'); // must match newsletter/email.blade.php
    }

    public function getUserVisitorContent() {
        return view('user.tabs.user_visitor_tab');
    }   




    
    // This method will handle GET /campaigns requests
    public function user()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('user/user');
    }
}
