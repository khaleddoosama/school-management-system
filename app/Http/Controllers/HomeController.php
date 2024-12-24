<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function index()
    {
        Log::info('X-Forwarded-Proto1: ' . request()->header('x-forwarded-proto'));

        return view('auth.selection');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}