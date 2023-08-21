<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    //

    Public function mostrar(){
        $listProveedores = Proveedor::all();
        return view('VerProveedores', compact('listProveedores'));
    }
    
}
