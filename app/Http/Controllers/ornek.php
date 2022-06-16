<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ornek extends Controller
{
    function test()
    {
        return "php turkiye";
    }
    
    function hg($isim)
    {
        return "merhaba ".$isim;
    }
};
