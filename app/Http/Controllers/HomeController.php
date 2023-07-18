<?php

namespace App\Http\Controllers;

use App\Models\CustomUrlBlock;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        // return view('home');
        return view('content.dashboard.dashboards-analytics');
    }

    public function customBlocking()
    {
        $customBlockList = CustomUrlBlock::all();
        return view('custom_blocking.index', compact('customBlockList'));
    }

    public function customBlockingAdd()
    {
        echo 'Test response';
    }
}
