<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Validator, Str;
use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
         $this->middleware('isadmin');
    }

    public function getHome(){
        return view('admin.products.index');
    }

    public function getProductAdd(){
        return view('admin.products.add');
    }

    public function postProductAdd(Request $request){
        
        $product = new Product;

        $product->status = '0';
        $product->name = $request->input('name');
        $product->color1 = $request->input('color1');
        $product->color2 = $request->input('color2');
        $product->color3 = $request->input('color3');
        $product->color4 = $request->input('color4');
        $product->color5 = $request->input('color5');
        $product->color6 = $request->input('color6');
        $product->color7 = $request->input('color7');
        $product->color8 = $request->input('color8');
        $product->color9 = $request->input('color9');
        $product->color10 = $request->input('color10');
        $product->color11 = $request->input('color11');
        $product->color12 = $request->input('color12');
        $product->cont_bust = $request->input('cont_bust') ? 1 : 0;
        $product->cont_cint = $request->input('cont_cint') ? 1 : 0;
        $product->cont_cadera = $request->input('cont_cadera') ? 1 : 0;
        $product->lar_cint = $request->input('lar_cint') ? 1 : 0;
        $product->larg_mang = $request->input('larg_mang') ? 1 : 0;
        $product->cont_bra = $request->input('cont_bra') ? 1 : 0;
        $product->larg_taj = $request->input('larg_taj') ? 1 : 0;
        $product->tip_bret = $request->input('tip_bret') ? 1 : 0;
        
        $product->image = $request->file('image')->getClientOriginalName();
        $product->price = $request->input('price');
        $product->slug = Str::slug($request->input('name'));

        //return print($product);

        if($product->save())
        {
            return redirect('/products')->with('message', 'Guardado con Ã©xito.')->with('typealert', 'danger');
        }

       /* $rules = [
            'name' => 'required',
            'img' => 'required',
            'price' => 'required'
        ];

        $messages = [
            'name.required' => 'El nombre del producto es requerido',
            'img.required' => 'Seleccione una imagen destacada',
            'img.image' => 'El archivo no es una imagen',
            'price.required' => 'Ingrese el precio del producto'
        ];

       $validator = Validator::make($request->all(), $rules, $messages);

        //return print_r($validator);
        
        if($validator->fails()):
            return print($validator);
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with(
             'typealert', 'danger')->withInput();
              else:
            
        
                $product = new Product;

                return print('mensageElse');

                $product->status = '0';
                $product->name = e($request->input('name'));
                $product->color1 = $request->input('color1');
                $product->color2 = $request->input('color2');
                $product->color3 = $request->input('color3');
                $product->color4 = $request->input('color4');
                $product->color5 = $request->input('color5');
                $product->color6 = $request->input('color6');
                $product->color7 = $request->input('color7');
                $product->color8 = $request->input('color8');
                $product->color9 = $request->input('color9');
                $product->color10 = $request->input('color10');
                $product->color11 = $request->input('color11');
                $product->color12 = $request->input('color12');
                $product->cont_bust = $request->input('cont_bust');
                $product->cont_cint = $request->input('cont_cint');
                $product->cont_cadera = $request->input('cont_cadera');
                $product->lar_cint = $request->input('lar_cint');
                $product->lar_mang = $request->input('lar_mang');
                $product->lar_mang = $request->input('cont_braz');
                $product->lar_mang = $request->input('larg_taj');
                $product->tip_bret = $request->input('tip_bret');
                
                $product->price = $request->input('price');
                $product->slug = Str::slug($request->input('name'));

                

                if($product->save()):
                    return redirect('/admin/products/index')->with('message', 'Guardado con Ã©xito.')->with('
                    typealert', 'danger');
                endif;
            endif;*/
    }
}

