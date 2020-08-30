<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = "categoria";

     protected $fillable = ['id', 'nombre',
    ];

    public function getCategories(){
        $categories = $this->db->query("SELECT * FROM categoria;");
        return $categories;
    }
   
}



