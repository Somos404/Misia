<?php

namespace App\Http\RoleControllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\RoleController as BaseController;

class RoleController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
