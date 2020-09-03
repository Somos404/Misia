<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $table = "user_order";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'colorname', 'color', 'cont_bust', 'cont_cint', 'cont_cadera', 'estatura_total', 'lar_cint', 'larg_mang', 'cont_bra', 'larg_taj', 'tip_bret', 'pagado', 'en_produccion', 'price', 'user_id', 'product_id'
    ];

}
