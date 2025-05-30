<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{   

    public function getNewsEmailContent() {
    return view('newsletter.tabs.news_email_tab'); // must match newsletter/email.blade.php
}

public function getPushContent() {
    return view('newsletter.tabs.push_tab');
}

public function getTextContent() {
    return view('newsletter.tabs.text_tab');
}

public function getWhatsappContent() {
    return view('newsletter.tabs.whatsapp_tab');
}


    
    // This method will handle GET /campaigns requests
    public function newsletter()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('newsletter/newsletter');
    }
}
