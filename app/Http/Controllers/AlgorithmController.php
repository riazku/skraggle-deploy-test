<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmController extends Controller
{   

     public function getAlgorithmsettingContent()
    {
        return view('algorithms.tabs.setting_tab');
    }

    public function getAlgorithmcrosssellContent()
    {
        return view('algorithms.tabs.crosssell_tab');
    }

    public function getAlgorithmproductContent()
    {
        return view('algorithms.tabs.product_tab');
    }

    public function getAlgorithmtestContent()
    {
        return view('algorithms.tabs.test_tab');
    }

   

    public function algorithms()
    {
        // Return a view located at resources/views/campaigns/index.blade.php
        return view('algorithms/algorithms ');
    }

    
    
    }



    



