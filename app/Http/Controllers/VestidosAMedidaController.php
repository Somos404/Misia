<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $imagenes = DB::table('imagenes')->where('product_color_id', $request->id)->get()->groupBy('color');
        
        $dataColors =[];
        foreach ($imagenes as $value) {
            $aux =[];
            $colorname = '';
            $color = '';
            foreach ($value as $item) {
                $colorname = $item->name;
                $color = $item->color;
                array_push($aux, $item->img);
            }
            array_push($dataColors, ['colorname'=> $colorname, 'color'=>$color ,'img'=>$aux]);
        }

        /* foreach ($dataColors as $value) {
            DD($value);
        } */
        //DD($dataColors);
        return view('vestidos-dos', ['product' =>$product, 'imagenes' => $dataColors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
