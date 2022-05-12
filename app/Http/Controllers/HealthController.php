<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function taisosei() 
        {  
            return view('taisosei'); /**体組成データを表示させる */
        }
}