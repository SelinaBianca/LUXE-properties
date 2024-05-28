<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilamentController extends Controller
{
    public function dashboard()
    {
        // Return the view for the dashboard
        return view('filament.dashboard');
    }
}

