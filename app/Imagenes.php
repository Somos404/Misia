<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    protected $table = "imagenes";

    protected $fillable = [
        'color', 'name', 'img','product_color_id', 'id' 
   ];

}
