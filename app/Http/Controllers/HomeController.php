<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;

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
        $sales_month = Sale::whereMonth('created_at', date('m'))->count();

        return view('home')->with('sales_month', $sales_month);
    }
}
