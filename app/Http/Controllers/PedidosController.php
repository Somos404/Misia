<?php

namespace App\Http\PedidoControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\PedidoController as BaseController;

class PedidoController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
