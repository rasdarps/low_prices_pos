<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use App\Models\Brand;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
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
        
        $pending_invoice = Invoice::where('status','0')->count(); 
        $approved_invoice =Invoice::where('status','1')->count();
        $pending_purchase = Purchase::where('status','0')->count();
        $approved_purchase =Purchase::where('status','1')->count();
       
        $products = DB::select('SELECT * FROM products WHERE quantity < stock_level');
        
        return view('admin.index', compact('products','pending_invoice','approved_invoice',
        'pending_purchase','approved_purchase'));
    }

    
}
