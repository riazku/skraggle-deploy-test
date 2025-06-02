<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{   

     public function getEcommerceoverviewContent()
    {
        return view('ecommerce.tabs.overview_tab');
    }

    public function getEcommerceconversionsContent()
    {
        return view('ecommerce.tabs.conversions_tab');
    }

    public function getEcommercechartContent()
    {
        return view('ecommerce.tabs.charts_tab');
    }

   

    public function ecommerce()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('ecommerce/ecommerce');
    }

    
    
    }



    



