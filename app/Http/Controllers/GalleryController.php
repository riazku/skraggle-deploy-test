<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{   

    public function getGallerydiscoverContent()
    {
        return view('gallery.tabs.discover_tab');
    }

    public function getGalleryprivateContent()
    {
        return view('gallery.tabs.private_tab');
    }

    
    // This method will handle GET /campaigns requests
    public function gallery()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('gallery/gallery');
    }
}
