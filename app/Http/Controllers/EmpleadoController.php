<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    //
    Public function mostrar(){
        $listEmpleado = Empleado::all();
        return view('VerEmpleados', compact('listEmpleado'));
    }

    Public function Guardar(){
        return view('CrearEmpleado');

        $empleado = new Empleado();

        $empleado -> Id = $request -> input('codigoPrestamo');
        $empleado -> nombre = $request -> input('monto');
        $empleado -> apellido = $request -> input('tasa');
        $empleado -> fechaingreso = $request -> input('plazo');
        $empleado -> salario = $request -> input('plazo');

        $empleado ->save();

        $empleado ->return(EmpleadoController::class, 'crear');
        

        return 'Guardado';
    }

}
