<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apartment;
use App\Models\Agent;


class AnalyticsController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $apartmentCount = Apartment::count();
        $agentCount = Agent::count();

        return view('statistics', compact('userCount', 'apartmentCount','agentCount'));
    }
}
