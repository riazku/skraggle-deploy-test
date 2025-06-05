<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   

     public function getPagestranslateContent()
    {
        return view('pages.tabs.translate_tab');
    }

    public function getPagescustomdomainContent()
    {
        return view('pages.tabs.customdomain_tab');
    }

   

    public function pages()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('pages/pages');
    }

    
    
    }



    



