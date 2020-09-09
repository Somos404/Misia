<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\UserOrder;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = DB::table('user_order')
            ->where('user_id', Auth::user()->id)
            ->where('user_order.pagado', 0)
            ->get()
            ->count();
        return response()->json(array('carrito'=> $carrito), 200);
    }

    public function carrito(){
        if(Auth::user()){
           
            $user = DB::table('user_order')->where('user_id', Auth::user()->id)
                    ->join('products', 'products.id', 'user_order.product_id')
                    ->leftjoin('config', 'config.id', 'user_order.tip_bret')
                    ->where('user_order.pagado', 0)
                    ->select(
                        'user_order.id as id',
                        'products.name as productorName',
                        'products.price as productPrice',
                        'user_order.price as totalPrice',
                        'config.price as bretPrice',
                        'config.name as bretName',
                    )->get();
                   
                    if ($user->count() == 0) {
                        return redirect()->route('usersvestidosmedida')->with('message', 'Crear tu vestido ideal.')->with('typealert', 'warning'); 
                    }
            //dd($user);
            //return view('carrito');
            return view('carrito', ['detalles' => $user]);
        }
        return view('auth.login');
    }

    public function destroy($id){

        $product = UserOrder::find($id);
        $product->delete();
        return redirect()->route('users.carrito');
    }
}
