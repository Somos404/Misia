<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

     protected $fillable = [
         'status', 'name','descripcion', 'color1', 'color2', 'color3', 'color4', 'color5', 'color6', 'color7', 'color8', 'color9', 'color10', 'color11', 'color12', 'cont_bust', 'cont_cint', 'cont_cadera', 'lar_cint', 'larg_mang', 'cont_bra', 'larg_taj', 'tip_bret', 'image_destacada', 'image_espalda', 'image_lateral', 'price', 'slug' 
    ];

    public function getProduct(){
        $product = $this->db->query("SELECT * FROM products;");
        return $product;
    }
   
}

