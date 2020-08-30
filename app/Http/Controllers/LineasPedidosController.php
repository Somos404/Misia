<?php

namespace App\Http\LineaPedidosControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\LineaPedidosController as BaseController;

class LineasPedidoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
