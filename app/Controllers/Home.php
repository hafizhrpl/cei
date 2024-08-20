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
   

    public function detailkandang()
    {
        return view('sidebar')
        . view('navbar')
           . view('detail_kandang')
           . view('footer');
    }

    public function detailminggu()
    {
        return view('sidebar')
        . view('navbar')
           . view('detail_kandang2')
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
