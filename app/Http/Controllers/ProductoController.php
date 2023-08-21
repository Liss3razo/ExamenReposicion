<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    Public function mostrar(){
        $listProductos = Producto::all();
        return view('VerProductos', compact('listProductos'));
    }
}
