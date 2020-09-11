<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getDashboard(){

        $vestas = DB::table('user_order')
        ->where('user_order.pagado', 1)->sum('user_order.price');

        $users = DB::table('users')
            ->where('users.role_id', 2)
            ->get()
            ->count();

        $products = DB::table('user_order')
            ->where('user_order.pagado', 1)
            ->get()
            ->count();

        //dd($carrito);
        return view('admin.dashboard', ['vestas' => $vestas, 'users' => $users, 'products' => $products]);
    }
}
