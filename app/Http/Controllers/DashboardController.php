<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',

            // Cards
            'total_kategori' => Kategori::count(),
        ];

        return view('dashboard', $data);
    }
}
