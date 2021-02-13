<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Product;
use App\Category;

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
        $jumlah_cincin = Product::where('category_id', '1')->count();
        $jumlah_kalung = Product::where('category_id', '2')->count();
        $jumlah_gelang = Product::where('category_id', '3')->count();
        $jumlah_anting = Product::where('category_id', '4')->count();
        $jumlah_subeng = Product::where('category_id', '5')->count();
        $jumlah_leontin = Product::where('category_id', '6')->count();
        $jumlah_peniti = Product::where('category_id', '7')->count();
        $jumlah_berlian = Product::where('category_id', '8')->count();
        $jumlah_lm = Product::where('category_id', '9')->count();
        $berat_sales = Sale::whereMonth('tanggal_sale', date('m'))->sum('berat');

        return view('/home', compact('sales_month', 'jumlah_cincin','jumlah_kalung','jumlah_gelang',
        'jumlah_anting','jumlah_subeng','jumlah_leontin','jumlah_peniti','jumlah_berlian','jumlah_lm','berat_sales'));
    }

    public function index2()
    {
        $sales_month = Sale::whereMonth('tanggal_sale', date('m'))->count();
        $jumlah_cincin = Product::where('category_id', '1')->count();
        $jumlah_kalung = Product::where('category_id', '2')->count();
        $jumlah_gelang = Product::where('category_id', '3')->count();
        $jumlah_anting = Product::where('category_id', '4')->count();
        $jumlah_subeng = Product::where('category_id', '5')->count();
        $jumlah_leontin = Product::where('category_id', '6')->count();
        $jumlah_peniti = Product::where('category_id', '7')->count();
        $jumlah_berlian = Product::where('category_id', '8')->count();
        $jumlah_lm = Product::where('category_id', '9')->count();
        $jumlah_ctg1 = Product::where('category_id', '10')->count();
        $jumlah_ctg2 = Product::where('category_id', '11')->count();
        $jumlah_ctg3 = Product::where('category_id', '12')->count();
        $jumlah_ctg4 = Product::where('category_id', '13')->count();
        $jumlah_ctg5 = Product::where('category_id', '14')->count();
        $berat_sales = Sale::whereMonth('tanggal_sale', date('m'))->sum('berat');
        $nama_nn1 = Category::where('id', '1')->get();
        $nama_nn2 = Category::where('id', '2')->get();
        $nama_nn3 = Category::where('id', '3')->get();
        $nama_nn4 = Category::where('id', '4')->get();
        $nama_nn5 = Category::where('id', '5')->get();
        $nama_nn6 = Category::where('id', '6')->get();
        $nama_nn7 = Category::where('id', '7')->get();
        $nama_nn8 = Category::where('id', '8')->get();
        $nama_nn9 = Category::where('id', '9')->get();
        $nama_nn10 = Category::where('id', '10')->get();
        $nama_nn11 = Category::where('id', '11')->get();
        $nama_nn12 = Category::where('id', '12')->get();
        $nama_nn13 = Category::where('id', '13')->get();
        $nama_nn14 = Category::where('id', '14')->get();
    
        return view('/dashboard2', compact('sales_month', 'jumlah_cincin','jumlah_kalung','jumlah_gelang',
        'jumlah_anting','jumlah_subeng','jumlah_leontin','jumlah_peniti','jumlah_berlian','jumlah_lm'
        ,'berat_sales','nama_nn1','nama_nn2','nama_nn3','nama_nn4','nama_nn5','nama_nn6',
        'nama_nn7','nama_nn8','nama_nn9','nama_nn10','nama_nn11','nama_nn12','nama_nn13','nama_nn14',
        'jumlah_ctg1','jumlah_ctg2','jumlah_ctg3','jumlah_ctg4','jumlah_ctg5'));
    }
}
