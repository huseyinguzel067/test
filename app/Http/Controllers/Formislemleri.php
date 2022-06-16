<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formislemleri extends Controller
{
    public function gorunum()
    {
        return view('from');
    }

    public function sonuc(Request $request)
    {
        return $request->metin;$_POST["metin"];
    }
}
