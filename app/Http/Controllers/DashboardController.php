<?php

namespace App\Http\Controllers;

use App\Models\Shorturl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    public function users()
    {
        $user = Auth::user();
        return view('dashboard.user.index', compact('user'));
    }

    public function shortlink()
    {
        $user = Auth::user();
        return view('dashboard.shortlink.index', compact('user'));
    }
}
