<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = DB::table('user_order')->where('user_id', Auth::user()->id)->get()->count();
        return response()->json(array('carrito'=> $carrito), 200);
    }

    public function carrito(){
        if(Auth::user()){
            $user = DB::table('user_order')->where('user_id', Auth::user()->id)
                    ->join('products', 'products.id', 'user_order.product_id')
                    ->select(
                        'user_order.id as id',
                        'products.name as productorNombre',
                        'products.price as productorPrecio',
                        'user_order.price as precio',
                        'user_order.tip_bret as bretel'
                    )->get();
    
            //dd($user);
            //return view('carrito');
            return view('carrito', ['detalles' => $user]);
        }
        return view('auth.login');
    }
}
