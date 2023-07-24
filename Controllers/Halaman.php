<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Halaman extends Controller
{
    public function about()
    {
        return view('about');
    }
}