<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Str;
use App\Product;
use App\Imagenes;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
         $this->middleware('isadmin');
    }

    public function getHome(){

        $products = DB::table('products')->get();
        return view('admin.products.index', ['products' => $products]);
    }

    public function getProductAdd(){
        return view('admin.products.add');
    }

    public function postProductAdd(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);
        
        $product = new Product;
        $Imgs = [];

        $product->status = '0';
        $product->name = $request->input('name');
        $product->descripcion = $request->input('descripcion');
        $product->color1 = $request->input('color1');
        if($request->hasFile('imgColor1')){

            dd($request->file('imgColor1'));
            
            $file = $request->file('imgColor1');
            $name = 'imgColor1'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color1_a')).'/',$name);
        }
        $product->color2 = $request->input('color2');
        if($request->hasFile('imgColor2')){
            $file = $request->file('imgColor2');
            $name = 'imgColor2'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color2_a')).'/',$name);

            $product->image_destacada = $name;
            $imagenes = new Imagenes;
        }
        $product->color3 = $request->input('color3');
        if($request->hasFile('imgColor3')){
            $file = $request->file('imgColor3');
            $name = 'imgColor3'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color3_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color4 = $request->input('color4');
        if($request->hasFile('imgColor4')){
            $file = $request->file('imgColor4');
            $name = 'imgColor4'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color4_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color5 = $request->input('color5');
        if($request->hasFile('imgColor5')){
            $file = $request->file('imgColor5');
            $name = 'imgColor5'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color5_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color6 = $request->input('color6');
        if($request->hasFile('imgColor6')){
            $file = $request->file('imgColor6');
            $name = 'imgColor6'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color6_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color7 = $request->input('color7');
        if($request->hasFile('imgColor7')){
            $file = $request->file('imgColor7');
            $name = 'imgColor7'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color7_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color8 = $request->input('color8');
        if($request->hasFile('imgColor8')){
            $file = $request->file('imgColor8');
            $name = 'imgColor8'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color8_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color9 = $request->input('color9');
        if($request->hasFile('imgColor9')){
            $file = $request->file('imgColor9');
            $name = 'imgColor9'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color9_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color10 = $request->input('color10');
        if($request->hasFile('imgColor10')){
            $file = $request->file('imgColor10');
            $name = 'imgColor10'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color10_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color11 = $request->input('color11');
        if($request->hasFile('imgColor11')){
            $file = $request->file('imgColor11');
            $name = 'imgColor11'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color11_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->color12 = $request->input('color12');
        if($request->hasFile('imgColor12')){
            $file = $request->file('imgColor12');
            $name = 'imgColor12'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/'.preg_replace('/\s+/', '_',$request->input('color12_a')).'/',$name);

            $product->image_destacada = $name;
        }
        $product->cont_bust = $request->input('cont_bust') ? 1 : 0;
        $product->cont_cint = $request->input('cont_cint') ? 1 : 0;
        $product->cont_cadera = $request->input('cont_cadera') ? 1 : 0;
        $product->lar_cint = $request->input('lar_cint') ? 1 : 0;
        $product->larg_mang = $request->input('larg_mang') ? 1 : 0;
        $product->cont_bra = $request->input('cont_bra') ? 1 : 0;
        $product->larg_taj = $request->input('larg_taj') ? 1 : 0;
        $product->tip_bret = $request->input('tip_bret') ? 1 : 0;
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = 'destacada'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/',$name);

            $product->image_destacada = $name;
        }
        if($request->hasFile('imageEspalda')){
            $file = $request->file('imageEspalda');
            $name = 'espalda'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/',$name);

            $product->image_espalda = $name;
        }
        if($request->hasFile('imageLateral')){
            $file = $request->file('imageLateral');
            $name = 'lateral'.time().preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move(public_path().'/images/'.preg_replace('/\s+/', '_',$request->input('name')).'/',$name);

            $product->image_lateral = $name;
        }

        $product->price = $request->input('price');
        $product->slug = Str::slug($request->input('name'));

        if($product->save())
        {
            return redirect('/products')->with('message', 'Guardado con Éxito.')->with('typealert', 'success');
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

