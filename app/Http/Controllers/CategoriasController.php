<?php

namespace App\Http\CategoriaControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\CategoriaPedidosController as BaseController;

class CategoriasController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getHome(){
        return view('admin.categories.home');
    }
}
