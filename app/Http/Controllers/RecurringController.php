<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecurringController extends Controller
{   
    public function getRecurringEmailContent()
    {
        return view('recurring.tabs.recurring_email_tab');
    }

    public function getRecurringPushContent()
    {
        return view('recurring.tabs.recurring_push_tab');
    }

    public function getRecurringTextContent()
    {
        return view('recurring.tabs.recurring_text_tab');
    }

    public function getRecurringWhatsappContent()
    {
        return view('recurring.tabs.recurring_whatsapp_tab');
    }

    public function getRecurringScenarioContent()
    {
        return view('recurring.tabs.recurring_scenarios_tab');
    }

    public function recurring()
    {
        return view('recurring.recurring');
    }
}
