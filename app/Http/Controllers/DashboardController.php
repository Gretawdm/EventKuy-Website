<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Backend.event.tambah_event');
    }

  
    public function tenant(){
    $tenants = Tenant::all(); // Mengambil semua data penyewa
    return view('Backend.tenan.semua', ['tenants' => $tenants]); // Mengirim data penyewa ke dalam view
    }

}