<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout/sidebar')
            . view('layout/navbar')
            . view('dashboard')
            . view('layout/footer');
    }

    public function kandang()
    {
        return view('layout/sidebar')
            . view('layout/navbar')
            . view('kandang')
            . view('layout/footer');
    }


    public function datatelur()
    {
        return view('layout/sidebar')
            . view('layout/navbar')
            . view('data_telur')
            . view('layout/footer');
    }

    public function datavitamin()
    {
        return view('layout/sidebar')
            . view('layout/navbar')
            . view('data_vitamin')
            . view('layout/footer');
    }
    public function laporan()
    {
        return view('layout/sidebar')
            . view('layout/navbar')
            . view('laporan')
            . view('layout/footer');
    }
}
