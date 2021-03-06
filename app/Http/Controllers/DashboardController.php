<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Parcel;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $parcel = Parcel::count();
        return view('dashboard', compact('user', 'parcel'));
    }
}
