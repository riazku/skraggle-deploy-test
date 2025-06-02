<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{   

    public function getCatalogsearchContent() {
        return view('catalog.tabs.search_terms_tab'); // must match newsletter/email.blade.php
    }

    public function getCatalogcategoryContent() {
        return view('catalog.tabs.items_tab');
    } 

    public function getCatalogitemsContent() {
        return view('catalog.tabs.category_tab');
    }   

    




    
    // This method will handle GET /campaigns requests
    public function catalog()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('catalog/catalog');
    }
}
