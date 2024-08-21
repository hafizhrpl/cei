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
   

    public function datatelur()
    {
        return view('sidebar')
        . view('navbar')
           . view('data_vitamin')
           . view('footer');
    }

    public function datavitamin()
    {
        return view('sidebar')
        . view('navbar')
           . view('data_vitamin')
           . view('footer');
    }
    public function laporan()
    {
        return view('sidebar')
        . view('navbar')
           . view('laporan')
           . view('footer');
    }

}
