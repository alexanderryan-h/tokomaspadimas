<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

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
        $sales_month = Sale::whereMonth('tanggal_sale', date('m'))->count();
        $berat_inventory = Product::sum('berat_product');
        $berat_sales = Sale::whereMonth('tanggal_sale', date('m'))->sum('berat');

        return view('/home', compact('sales_month', 'berat_inventory','berat_sales'));
    }

    public function index2()
    {
        $sales_month = Sale::whereMonth('tanggal_sale', date('m'))->count();

        $jumlah = DB::table('products')->join('categories','products.category_id','=','categories.id')
        ->select(DB::raw('category_id, count(*) as count'),'name')
        ->groupBy('category_id','name')->get();

        $jumlah_cincin = Product::where('category_id', '1')->count();
        $berat_sales = Sale::whereMonth('tanggal_sale', date('m'))->sum('berat');
        $nama=DB::table("categories")->get();
      
    
        return view('/dashboard2', compact('sales_month', 'jumlah_cincin','jumlah','nama'));
    }
}
