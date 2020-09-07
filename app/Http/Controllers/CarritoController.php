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
}
