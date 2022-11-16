<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistaController extends Controller
{   
    
    public function Cliente(){
    return view('pages.cliente') ;    
}

    
//Supervisor Opciones

public function Supervisor(){
    return view('pages.supervisor') ;    
}

    
public function OrdenProduccion(){
    return view('pages.supervisor') ;    
}

public function RegistroCliente(){
    return view('SupervisorComponents.RegistroCliente') ;     
}


public function EstadoPedido(){
    return view('SupervisorComponents.EstadoPedido') ;    
}

public function GestionTelas(){
    return view('SupervisorComponents.GestionTelas') ; 
}


public function GestionTintes(){
    return view('SupervisorComponents.GestionTintes') ;     
}

public function GestionArticulos(){
    return view('SupervisorComponents.GestionArticulos') ;     
}

public function Reportes(){
    return view('SupervisorComponents.Reportes');    
}


//Cliente Opciones
public function EstadoPedidoCliente(){
    return view('ClienteComponents.EstadoPedido') ;    
}
public function OrdenPedidoCliente(){
    return view('ClienteComponents.OrdenPedido') ;    
}

public function UsoTelas(){
    return view('ClienteComponents.UsoTelas') ;    
}

public function UsoTintes(){
    return view('ClienteComponents.UsoTintes') ;    
}

public function ReporteCliente(){
    return view('ClienteComponents.Reporte') ;    
}







}
