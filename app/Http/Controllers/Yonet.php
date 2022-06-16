<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Yonet extends Controller
{
    public function site()
    {
        $data["yazi1"]="php turkiye";
        $data["yazi2"]="web sitemize hoş geldiniz";
        $data["yazi3"]="Hizmetlerimiz";
        $data["yazi4"]="web tasarımı ve yazılımı hizmetlerimiz";
        $data["yazi5"]="bize ulaşın";
        return view('web', $data);
    }
}
