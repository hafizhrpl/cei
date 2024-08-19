<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('partials/sidebar');
    }

    public function tambah()
    {
        return view('tambah_data');
        return view('partials/sidebar');
        return view('partials/footer');
    }
}
