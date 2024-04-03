<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Accommodations;

class DashboardController extends Controller
{
    public function index()
    {
        $accommodations = Accommodations::all();
        return view('dashboard', ['accommodations' => $accommodations]);
    }
}
