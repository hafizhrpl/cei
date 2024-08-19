<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('sidebar')
            . view('navbar')
            . view('dashboard')
            . view('footer');
    }

    public function kandang()
    {
        return view('sidebar')
            . view('navbar')
            . view('kandang')
            . view('footer');
    }
}
