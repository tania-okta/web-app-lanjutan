<?php

namespace App\Http\Controllers;

class SatuController extends Controller
{
    public function satu() 
    {
        return view("view-1");
    }

    public function dua()
    {
        return view("view-2");
    }

    public function tiga()
    {
    return view("view-3");
    }
}
