<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\UserOrder;
use Auth;

class VestidosAMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        //dd($products);
        if($products->isEmpty()){
            return view('home');
        }
        return view('vestidos', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = DB::table('products')->find($request->id);
        $tipBret = DB::table('config')->get();
        $imagenes = DB::table('imagenes')->where('product_color_id', $request->id)->get()->groupBy('color');
        
        $dataColors =[];
        foreach ($imagenes as $value) {
            $aux =[];
            $colorname = '';
            $color = '';
            $id = '';
            foreach ($value as $item) {
                $id = $item->id;
                $colorname = $item->name;
                $color = $item->color;
                array_push($aux, $item->img);
            }
            array_push($dataColors, ['id'=> $id, 'colorname'=> $colorname, 'color'=>$color , 'img'=>$aux]);
        }

        /* foreach ($dataColors as $value) {
            DD($value);
        } */
        //DD($dataColors);
        return view('vestidos-dos', ['product' =>$product, 'imagenes' => $dataColors , 'tipBret'=>$tipBret]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function preView(Request $request)
    {

        $product = DB::table('products')->find($request->id_vestido);
        
        $tip_bret = DB::table('config')->find($request->tip_bret);
        
        $imagenes = DB::table('imagenes')->where('product_color_id', $request->id_vestido)
                                            ->where('color', $request->color)
                                                ->get()->groupBy('color');
        
        $dataColors = '';
        foreach ($imagenes as $value) {
            $aux =[];
            $colorname = '';
            $color = '';
            $id = '';
            foreach ($value as $item) {
                $id = $item->id;
                $colorname = $item->name;
                $color = $item->color;
                array_push($aux, $item->img);
            }
            $dataColors = (['id'=> $id, 'colorname'=> $colorname, 'color'=>$color ,'img'=>$aux]);
        }
        return view('/detalle-de-compra', ['detalle' => $request, 'product' => $product, 'imagenes' => $dataColors, 'tip_bret' => $tip_bret]);
    }

    public function store(Request $request)
    {
        $productprice = DB::table('products')->find($request->product_id)->price;
        if (Auth::user()) {
            $userOder = new UserOrder;
            $userOder->colorname = $request->input('colorname');
            $userOder->color = $request->input('color');
            $userOder->cont_bust = $request->input('cont_bust');
            $userOder->cont_cint = $request->input('cont_cint');
            $userOder->cont_cadera = $request->input('cont_cadera');
            $userOder->estatura_total = $request->input('estatura_total');
            $userOder->lar_cint = $request->input('lar_cint');
            $userOder->larg_mang = $request->input('larg_mang');
            $userOder->cont_bra = $request->input('cont_bra');
            $userOder->larg_taj = $request->input('larg_taj');
            $userOder->tip_bret = $request->input('tip_bret');

            if ($request->tip_bret) {
                $tip_bret = DB::table('config')->find($request->tip_bret)->price;
                $userOder->price = $tip_bret + $productprice;
            }else{

                $userOder->price = $productprice;
            }
            $userOder->user_id = Auth::user()->id;
            $userOder->product_id = $request->input('product_id');
    
            if ($userOder->save()) {
                return back()->with('message', 'Se agregó al carrito.')->with('typealert', 'success'); 
            }
            return back()->with('message', 'Problemas en la operación intente otra ves.')->with('typealert', 'danger');
        }
        return view('auth.login');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('vestidos-dos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
